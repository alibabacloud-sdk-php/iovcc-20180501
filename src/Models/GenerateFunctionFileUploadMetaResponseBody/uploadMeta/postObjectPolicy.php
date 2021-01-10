<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateFunctionFileUploadMetaResponseBody\uploadMeta;

use AlibabaCloud\Tea\Model;

class postObjectPolicy extends Model
{
    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $expire;

    /**
     * @var string
     */
    public $accessId;
    protected $_name = [
        'signature' => 'Signature',
        'host'      => 'Host',
        'policy'    => 'Policy',
        'expire'    => 'Expire',
        'accessId'  => 'AccessId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return postObjectPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }

        return $model;
    }
}
