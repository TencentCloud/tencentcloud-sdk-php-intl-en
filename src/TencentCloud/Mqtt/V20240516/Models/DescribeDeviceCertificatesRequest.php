<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceCertificates request structure.
 *
 * @method string getInstanceId() Obtain Tencent Cloud MQTT instance ID can be obtained from the console.
 * @method void setInstanceId(string $InstanceId) Set Tencent Cloud MQTT instance ID can be obtained from the console.
 * @method array getFilters() Obtain Support search parameter
Client id: Client id, obtained based on actual business operations.
CaSn: The SN serial number of the CA certificate belonging to it can be obtained by querying the cluster CA certificate list (https://www.tencentcloud.com/document/api/1778/116206?from_cn_redirect=1) or through business operations.
DeviceCertificateSn: SN serial number of the device certificate. Can be obtained from [Query Device Certificate Detail](https://www.tencentcloud.com/document/api/1778/113748?from_cn_redirect=1).
DeviceCertificateCn: The device certificate CN.
OrganizationalUnit: Cert OU
NotAfterEnd: Certificates with expiration time less than or equal to the specified time
NotAfterStart: Cert with expiration time equal to or greater than the specified time
Status: Device certificate status. ACTIVE (activated); INACTIVE (inactive); REVOKED (revoked); PENDING_ACTIVATION (to be activated).

 * @method void setFilters(array $Filters) Set Support search parameter
Client id: Client id, obtained based on actual business operations.
CaSn: The SN serial number of the CA certificate belonging to it can be obtained by querying the cluster CA certificate list (https://www.tencentcloud.com/document/api/1778/116206?from_cn_redirect=1) or through business operations.
DeviceCertificateSn: SN serial number of the device certificate. Can be obtained from [Query Device Certificate Detail](https://www.tencentcloud.com/document/api/1778/113748?from_cn_redirect=1).
DeviceCertificateCn: The device certificate CN.
OrganizationalUnit: Cert OU
NotAfterEnd: Certificates with expiration time less than or equal to the specified time
NotAfterStart: Cert with expiration time equal to or greater than the specified time
Status: Device certificate status. ACTIVE (activated); INACTIVE (inactive); REVOKED (revoked); PENDING_ACTIVATION (to be activated).

 * @method integer getLimit() Obtain Pagination limit. Default 20. Maximum 100.
 * @method void setLimit(integer $Limit) Set Pagination limit. Default 20. Maximum 100.
 * @method integer getOffset() Obtain Pagination offset, default 0
 * @method void setOffset(integer $Offset) Set Pagination offset, default 0
 * @method string getOrderBy() Obtain Sorting rule
CREATE_TIME_DESC, descending order by creation time
CREATE_TIME_ASC, sort by creation time in ascending order
UPDATE_TIME_DESC, descending order by update time
UPDATE_TIME_ASC, update time in ascending order
 * @method void setOrderBy(string $OrderBy) Set Sorting rule
CREATE_TIME_DESC, descending order by creation time
CREATE_TIME_ASC, sort by creation time in ascending order
UPDATE_TIME_DESC, descending order by update time
UPDATE_TIME_ASC, update time in ascending order
 */
class DescribeDeviceCertificatesRequest extends AbstractModel
{
    /**
     * @var string Tencent Cloud MQTT instance ID can be obtained from the console.
     */
    public $InstanceId;

    /**
     * @var array Support search parameter
Client id: Client id, obtained based on actual business operations.
CaSn: The SN serial number of the CA certificate belonging to it can be obtained by querying the cluster CA certificate list (https://www.tencentcloud.com/document/api/1778/116206?from_cn_redirect=1) or through business operations.
DeviceCertificateSn: SN serial number of the device certificate. Can be obtained from [Query Device Certificate Detail](https://www.tencentcloud.com/document/api/1778/113748?from_cn_redirect=1).
DeviceCertificateCn: The device certificate CN.
OrganizationalUnit: Cert OU
NotAfterEnd: Certificates with expiration time less than or equal to the specified time
NotAfterStart: Cert with expiration time equal to or greater than the specified time
Status: Device certificate status. ACTIVE (activated); INACTIVE (inactive); REVOKED (revoked); PENDING_ACTIVATION (to be activated).

     */
    public $Filters;

    /**
     * @var integer Pagination limit. Default 20. Maximum 100.
     */
    public $Limit;

    /**
     * @var integer Pagination offset, default 0
     */
    public $Offset;

    /**
     * @var string Sorting rule
CREATE_TIME_DESC, descending order by creation time
CREATE_TIME_ASC, sort by creation time in ascending order
UPDATE_TIME_DESC, descending order by update time
UPDATE_TIME_ASC, update time in ascending order
     */
    public $OrderBy;

    /**
     * @param string $InstanceId Tencent Cloud MQTT instance ID can be obtained from the console.
     * @param array $Filters Support search parameter
Client id: Client id, obtained based on actual business operations.
CaSn: The SN serial number of the CA certificate belonging to it can be obtained by querying the cluster CA certificate list (https://www.tencentcloud.com/document/api/1778/116206?from_cn_redirect=1) or through business operations.
DeviceCertificateSn: SN serial number of the device certificate. Can be obtained from [Query Device Certificate Detail](https://www.tencentcloud.com/document/api/1778/113748?from_cn_redirect=1).
DeviceCertificateCn: The device certificate CN.
OrganizationalUnit: Cert OU
NotAfterEnd: Certificates with expiration time less than or equal to the specified time
NotAfterStart: Cert with expiration time equal to or greater than the specified time
Status: Device certificate status. ACTIVE (activated); INACTIVE (inactive); REVOKED (revoked); PENDING_ACTIVATION (to be activated).

     * @param integer $Limit Pagination limit. Default 20. Maximum 100.
     * @param integer $Offset Pagination offset, default 0
     * @param string $OrderBy Sorting rule
CREATE_TIME_DESC, descending order by creation time
CREATE_TIME_ASC, sort by creation time in ascending order
UPDATE_TIME_DESC, descending order by update time
UPDATE_TIME_ASC, update time in ascending order
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
