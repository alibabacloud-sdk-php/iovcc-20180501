<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class FindVersionMessageSendRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $versionType;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $messageType;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'versionType' => 'VersionType',
        'projectId'   => 'ProjectId',
        'pageIndex'   => 'PageIndex',
        'pageSize'    => 'PageSize',
        'messageType' => 'MessageType',
        'versionId'   => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionType) {
            $res['VersionType'] = $this->versionType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindVersionMessageSendRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersionType'])) {
            $model->versionType = $map['VersionType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
