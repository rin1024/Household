#!/usr/bin/perl -w

use strict;

my $str = '';
my $last_date = '';
my %category_list = ();
my $category_id_counter = 1;

open my $F, $ARGV[0];
while (my $line = <$F>) {
  my($created,$category,$title,$price,$description) = split(/\t/, $line);
  my $category_id = -1;
  my @date;
  if (length($created) > 0) {
    @date = ($created =~ /([\d]*?)Œ([\d]*?)“ú/);
    $last_date = $created;
  }
  else {
    @date = ($last_date =~ /([\d]*?)Œ([\d]*?)“ú/);
  }
  my $created_at = sprintf('%04d-%02d-%02d 00:00:00', 2010, $date[0], $date[1]);

  if ($category_list{$category}) {
    $category_id = $category_list{$category};
  }
  else {
    $category_list{$category} = $category_id_counter;
    $category_id = $category_id_counter;
    $category_id_counter++;
  }
  
  my @arr = (
    'NULL',
    $category_id,
    "'$title'",
    "'$price'",
    "'$description'",
    "'$created_at'",
    "''",
  );

  $str .= '('. join(',', @arr). '),'. $/;
}
close $F;

# ƒJƒeƒSƒŠˆê——o—Í
#foreach my $id(keys(%category_list)) {
#  print '("', $category_list{$id}, '", "', $id, '"),', $/;
#}

print $str, $/;

1;
