<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeviceModelsResponseBody;

use AlibabaCloud\Tea\Model;

class deviceModels extends Model
{
    /**
     * @var int
     */
    public $deviceModelId;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $hardwareType;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var string
     */
    public $deviceBrand;

    /**
     * @var int
     */
    public $canCreateDeviceId;

    /**
     * @var int
     */
    public $initUsageType;

    /**
     * @var string
     */
    public $initUsageTypeDesc;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $securityChip;

    /**
     * @var string
     */
    public $osPlatform;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $deviceLogoUrl;

    /**
     * @var string
     */
    public $deviceName;
    protected $_name = [
        'deviceModelId'     => 'DeviceModelId',
        'deviceType'        => 'DeviceType',
        'hardwareType'      => 'HardwareType',
        'deviceModel'       => 'DeviceModel',
        'deviceBrand'       => 'DeviceBrand',
        'canCreateDeviceId' => 'CanCreateDeviceId',
        'initUsageType'     => 'InitUsageType',
        'initUsageTypeDesc' => 'InitUsageTypeDesc',
        'description'       => 'Description',
        'projectId'         => 'ProjectId',
        'securityChip'      => 'SecurityChip',
        'osPlatform'        => 'OsPlatform',
        'objectKey'         => 'ObjectKey',
        'deviceLogoUrl'     => 'DeviceLogoUrl',
        'deviceName'        => 'DeviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceModelId) {
            $res['DeviceModelId'] = $this->deviceModelId;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->hardwareType) {
            $res['HardwareType'] = $this->hardwareType;
        }
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->deviceBrand) {
            $res['DeviceBrand'] = $this->deviceBrand;
        }
        if (null !== $this->canCreateDeviceId) {
            $res['CanCreateDeviceId'] = $this->canCreateDeviceId;
        }
        if (null !== $this->initUsageType) {
            $res['InitUsageType'] = $this->initUsageType;
        }
        if (null !== $this->initUsageTypeDesc) {
            $res['InitUsageTypeDesc'] = $this->initUsageTypeDesc;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->securityChip) {
            $res['SecurityChip'] = $this->securityChip;
        }
        if (null !== $this->osPlatform) {
            $res['OsPlatform'] = $this->osPlatform;
        }
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }
        if (null !== $this->deviceLogoUrl) {
            $res['DeviceLogoUrl'] = $this->deviceLogoUrl;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceModelId'])) {
            $model->deviceModelId = $map['DeviceModelId'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['HardwareType'])) {
            $model->hardwareType = $map['HardwareType'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['DeviceBrand'])) {
            $model->deviceBrand = $map['DeviceBrand'];
        }
        if (isset($map['CanCreateDeviceId'])) {
            $model->canCreateDeviceId = $map['CanCreateDeviceId'];
        }
        if (isset($map['InitUsageType'])) {
            $model->initUsageType = $map['InitUsageType'];
        }
        if (isset($map['InitUsageTypeDesc'])) {
            $model->initUsageTypeDesc = $map['InitUsageTypeDesc'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SecurityChip'])) {
            $model->securityChip = $map['SecurityChip'];
        }
        if (isset($map['OsPlatform'])) {
            $model->osPlatform = $map['OsPlatform'];
        }
        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }
        if (isset($map['DeviceLogoUrl'])) {
            $model->deviceLogoUrl = $map['DeviceLogoUrl'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        return $model;
    }
}
