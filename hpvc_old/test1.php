<?php
		$invID1=1001;
		$invID1=str_pad($invID1, 6, '0', STR_PAD_LEFT);
        $invID1=str_pad($invID1, 7, 'C', STR_PAD_LEFT);
        $invID1=str_pad($invID1, 8, 'V', STR_PAD_LEFT);
        $invID1=str_pad($invID1, 9, 'P', STR_PAD_LEFT);
        $invID1=str_pad($invID1, 10, 'H', STR_PAD_LEFT);
        echo $invID1;
?>