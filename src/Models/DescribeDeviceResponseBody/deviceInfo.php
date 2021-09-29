<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class deviceInfo extends Model
{
    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $deviceModelId;

    /**
     * @var string
     */
    public $macAddress;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $osPlatform;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var int
     */
    public $usageType;

    /**
     * @var string
     */
    public $vin;

    /**
     * @var string
     */
    public $usageTypeDesc;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $hardwareId;

    /**
     * @var int
     */
    public $deviceBrandId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $attributes;

    /**
     * @var string
     */
    public $softwareId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $deviceBrand;

    /**
     * @var string
     */
    public $deviceProduct;
    protected $_name = [
        'serialNumber'  => 'SerialNumber',
        'status'        => 'Status',
        'deviceModelId' => 'DeviceModelId',
        'macAddress'    => 'MacAddress',
        'deviceId'      => 'DeviceId',
        'deviceType'    => 'DeviceType',
        'projectId'     => 'ProjectId',
        'osPlatform'    => 'OsPlatform',
        'deviceModel'   => 'DeviceModel',
        'usageType'     => 'UsageType',
        'vin'           => 'Vin',
        'usageTypeDesc' => 'UsageTypeDesc',
        'uuid'          => 'Uuid',
        'hardwareId'    => 'HardwareId',
        'deviceBrandId' => 'DeviceBrandId',
        'region'        => 'Region',
        'attributes'    => 'Attributes',
        'softwareId'    => 'SoftwareId',
        'name'          => 'Name',
        'deviceBrand'   => 'DeviceBrand',
        'deviceProduct' => 'DeviceProduct',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->deviceModelId) {
            $res['DeviceModelId'] = $this->deviceModelId;
        }
        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->osPlatform) {
            $res['OsPlatform'] = $this->osPlatform;
        }
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->usageType) {
            $res['UsageType'] = $this->usageType;
        }
        if (null !== $this->vin) {
            $res['Vin'] = $this->vin;
        }
        if (null !== $this->usageTypeDesc) {
            $res['UsageTypeDesc'] = $this->usageTypeDesc;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->hardwareId) {
            $res['HardwareId'] = $this->hardwareId;
        }
        if (null !== $this->deviceBrandId) {
            $res['DeviceBrandId'] = $this->deviceBrandId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->softwareId) {
            $res['SoftwareId'] = $this->softwareId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->deviceBrand) {
            $res['DeviceBrand'] = $this->deviceBrand;
        }
        if (null !== $this->deviceProduct) {
            $res['DeviceProduct'] = $this->deviceProduct;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DeviceModelId'])) {
            $model->deviceModelId = $map['DeviceModelId'];
        }
        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['OsPlatform'])) {
            $model->osPlatform = $map['OsPlatform'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['UsageType'])) {
            $model->usageType = $map['UsageType'];
        }
        if (isset($map['Vin'])) {
            $model->vin = $map['Vin'];
        }
        if (isset($map['UsageTypeDesc'])) {
            $model->usageTypeDesc = $map['UsageTypeDesc'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['HardwareId'])) {
            $model->hardwareId = $map['HardwareId'];
        }
        if (isset($map['DeviceBrandId'])) {
            $model->deviceBrandId = $map['DeviceBrandId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['SoftwareId'])) {
            $model->softwareId = $map['SoftwareId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['DeviceBrand'])) {
            $model->deviceBrand = $map['DeviceBrand'];
        }
        if (isset($map['DeviceProduct'])) {
            $model->deviceProduct = $map['DeviceProduct'];
        }

        return $model;
    }
}
