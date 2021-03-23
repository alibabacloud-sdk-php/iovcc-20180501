<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMqttRootTopicsResponseBody\rootTopics;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $rootTopic;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $appKey;
    protected $_name = [
        'createTime' => 'CreateTime',
        'rootTopic'  => 'RootTopic',
        'type'       => 'Type',
        'queueName'  => 'QueueName',
        'appKey'     => 'AppKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->rootTopic) {
            $res['RootTopic'] = $this->rootTopic;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RootTopic'])) {
            $model->rootTopic = $map['RootTopic'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        return $model;
    }
}
