<?php

namespace Recurly\Resource;

class Invoices extends Resource
{

    /**
     * Gets a PDF version of an invoice
     *
     * @param $number
     *
     * @return string
     */
    public function getPdf($number)
    {
        $suffix  = sprintf('invoices/%s', $number);
        $this->client->setHeaders([
                'Accept' => 'application/pdf',
            ]);

        return $this->apiGet($suffix);
    }
}