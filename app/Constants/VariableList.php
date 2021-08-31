<?php

namespace App\Constants;

final class VariableList
{
    public const InvoiceStatus = array(
        0 => 'Draft invoice',
        2 => 'Sent',
        3 => 'Part paid',
        4 => 'Paid',
        8 => 'Credit Invoice',
        9 => 'Cancelled'
    );

}