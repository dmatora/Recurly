<?php

namespace Recurly\Resource;

class Invoices extends Resource
{

    public function get($number)
    {
        return $this->apiGet(
            sprintf('invoices/%s', $number),
            'Recurly\Model\Invoice'
        );
    }

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