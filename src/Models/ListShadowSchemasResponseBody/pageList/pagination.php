<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListShadowSchemasResponseBody\pageList;

use AlibabaCloud\Tea\Model;

class pagination extends Model
{
    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $totalPageCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var bool
     */
    public $simpleSign;

    /**
     * @var bool
     */
    public $hasNextPage;
    protected $_name = [
        'pageIndex'      => 'PageIndex',
        'totalPageCount' => 'TotalPageCount',
        'pageSize'       => 'PageSize',
        'totalCount'     => 'TotalCount',
        'simpleSign'     => 'SimpleSign',
        'hasNextPage'    => 'HasNextPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->totalPageCount) {
            $res['TotalPageCount'] = $this->totalPageCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->simpleSign) {
            $res['SimpleSign'] = $this->simpleSign;
        }
        if (null !== $this->hasNextPage) {
            $res['HasNextPage'] = $this->hasNextPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pagination
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['TotalPageCount'])) {
            $model->totalPageCount = $map['TotalPageCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['SimpleSign'])) {
            $model->simpleSign = $map['SimpleSign'];
        }
        if (isset($map['HasNextPage'])) {
            $model->hasNextPage = $map['HasNextPage'];
        }

        return $model;
    }
}
