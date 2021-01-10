<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListProjectsResponseBody\projects;
use AlibabaCloud\Tea\Model;

class ListProjectsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var projects[]
     */
    public $projects;
    protected $_name = [
        'requestId' => 'RequestId',
        'projects'  => 'Projects',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->projects) {
            $res['Projects'] = [];
            if (null !== $this->projects && \is_array($this->projects)) {
                $n = 0;
                foreach ($this->projects as $item) {
                    $res['Projects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Projects'])) {
            if (!empty($map['Projects'])) {
                $model->projects = [];
                $n               = 0;
                foreach ($map['Projects'] as $item) {
                    $model->projects[$n++] = null !== $item ? projects::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
