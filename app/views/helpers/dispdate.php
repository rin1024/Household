<?php
class DispdateHelper extends Helper
{
  function format($strdate, $mode = 0)
  {

    $outstr = '';
    $nt = strtotime($strdate);
    if ($nt != FALSE)
    {
      if ($mode == 0)
      {
        $outstr = date('Y/m/d',$nt);
      }
      elseif ($mode == 1)
      {
        $outstr = date('Y/m/d H:i',$nt);
      }
      elseif ($mode == 2)
      {
        $outstr = date('Y/m/d H:i:s',$nt);
      }
    }
    else
    {
      $match = array();

      if ($mode == 0)
      {
        if (preg_match( '/^(\d{4})[\/-](\d{2})[\/-](\d{2})/', $strdate, $match ))
        {
          $outstr = sprintf('%04d/%02d/%02d',@$match[1],@$match[2],@$match[3]);
        }
        else
        {
          $outstr = $strdate;
        }
      }
      elseif ($mode == 1)
      {
        if (preg_match( '/^(\d{4})[\/-](\d{2})[\/-](\d{2}) (\d{2}):(\d{2})/', $strdate, $match ))
        {
          $outstr = sprintf('%04d/%02d/%02d %02d:%02d',@$match[1],@$match[2],@$match[3],@$match[4],@$match[5]);
        }
        else
        {
          $outstr = $strdate;
        }
      }
      elseif ($mode == 2)
      {
        if (preg_match( '/^(\d{4})[\/-](\d{2})[\/-](\d{2}) (\d{2}):(\d{2}):(\d{2})/', $strdate, $match ))
        {
          $outstr = sprintf('%04d/%02d/%02d %02d:%02d:%02d',@$match[1],@$match[2],@$match[3],@$match[4],@$match[5],@$match[6]);
        }
        else
        {
          $outstr = $strdate;
        }
      }
    }

    return $outstr;
  }

}
?>
