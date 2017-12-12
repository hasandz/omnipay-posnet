<?php

namespace Omnipay\Posnet\Message;

/**
 * Posnet Void Request
 *
 * (c) Yasin Kuyu
 * 2015, insya.com
 * http://www.github.com/yasinkuyu/omnipay-posnet
 */
class VoidRequest extends PurchaseRequest {

    public function getData() {

        $this->validate('transactionReference');

        $data['transaction'] = "sale";
        $data['hostLogKey'] = $this->getTransactionReference();
        $data['authCode'] = $this->getAuthCode();

        return $data;
    }

}
