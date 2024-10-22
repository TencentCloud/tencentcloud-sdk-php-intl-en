<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceResetInstancesInternetMaxBandwidth request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. The maximum number of instances in each request is 100. When changing the bandwidth of instances with `BANDWIDTH_PREPAID` or `BANDWIDTH_POSTPAID_BY_HOUR` as the network billing method, you can only specify one instance at a time.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. The maximum number of instances in each request is 100. When changing the bandwidth of instances with `BANDWIDTH_PREPAID` or `BANDWIDTH_POSTPAID_BY_HOUR` as the network billing method, you can only specify one instance at a time.
 * @method InternetAccessible getInternetAccessible() Obtain Configuration of public network egress bandwidth. The maximum bandwidth varies among different models. For more information, see the documentation on bandwidth limits. Currently only the `InternetMaxBandwidthOut` parameter is supported.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Configuration of public network egress bandwidth. The maximum bandwidth varies among different models. For more information, see the documentation on bandwidth limits. Currently only the `InternetMaxBandwidthOut` parameter is supported.
 * @method string getStartTime() Obtain Date from which the new bandwidth takes effect. Format: `YYYY-MM-DD`, such as `2016-10-30`. The starting date cannot be earlier than the current date. If the starting date is the current date, the new bandwidth takes effect immediately. This parameter is only valid for prepaid bandwidth. If you specify the parameter for bandwidth with other network billing methods, an error code will be returned.
 * @method void setStartTime(string $StartTime) Set Date from which the new bandwidth takes effect. Format: `YYYY-MM-DD`, such as `2016-10-30`. The starting date cannot be earlier than the current date. If the starting date is the current date, the new bandwidth takes effect immediately. This parameter is only valid for prepaid bandwidth. If you specify the parameter for bandwidth with other network billing methods, an error code will be returned.
 * @method string getEndTime() Obtain Date until which the bandwidth takes effect, in the format of `YYYY-MM-DD`, such as `2016-10-30`. The validity period of the new bandwidth covers the end date. The end date should not be later than the expiration date of a monthly subscription instance. You can obtain the expiration date of an instance through the `ExpiredTime` in the return value from the API [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1). This parameter is only valid for monthly subscription bandwidth, and is not supported for bandwidth billed by other modes. Otherwise, the API will return a corresponding error code.
 * @method void setEndTime(string $EndTime) Set Date until which the bandwidth takes effect, in the format of `YYYY-MM-DD`, such as `2016-10-30`. The validity period of the new bandwidth covers the end date. The end date should not be later than the expiration date of a monthly subscription instance. You can obtain the expiration date of an instance through the `ExpiredTime` in the return value from the API [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1). This parameter is only valid for monthly subscription bandwidth, and is not supported for bandwidth billed by other modes. Otherwise, the API will return a corresponding error code.
 */
class InquiryPriceResetInstancesInternetMaxBandwidthRequest extends AbstractModel
{
    /**
     * @var array Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. The maximum number of instances in each request is 100. When changing the bandwidth of instances with `BANDWIDTH_PREPAID` or `BANDWIDTH_POSTPAID_BY_HOUR` as the network billing method, you can only specify one instance at a time.
     */
    public $InstanceIds;

    /**
     * @var InternetAccessible Configuration of public network egress bandwidth. The maximum bandwidth varies among different models. For more information, see the documentation on bandwidth limits. Currently only the `InternetMaxBandwidthOut` parameter is supported.
     */
    public $InternetAccessible;

    /**
     * @var string Date from which the new bandwidth takes effect. Format: `YYYY-MM-DD`, such as `2016-10-30`. The starting date cannot be earlier than the current date. If the starting date is the current date, the new bandwidth takes effect immediately. This parameter is only valid for prepaid bandwidth. If you specify the parameter for bandwidth with other network billing methods, an error code will be returned.
     */
    public $StartTime;

    /**
     * @var string Date until which the bandwidth takes effect, in the format of `YYYY-MM-DD`, such as `2016-10-30`. The validity period of the new bandwidth covers the end date. The end date should not be later than the expiration date of a monthly subscription instance. You can obtain the expiration date of an instance through the `ExpiredTime` in the return value from the API [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1). This parameter is only valid for monthly subscription bandwidth, and is not supported for bandwidth billed by other modes. Otherwise, the API will return a corresponding error code.
     */
    public $EndTime;

    /**
     * @param array $InstanceIds Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. The maximum number of instances in each request is 100. When changing the bandwidth of instances with `BANDWIDTH_PREPAID` or `BANDWIDTH_POSTPAID_BY_HOUR` as the network billing method, you can only specify one instance at a time.
     * @param InternetAccessible $InternetAccessible Configuration of public network egress bandwidth. The maximum bandwidth varies among different models. For more information, see the documentation on bandwidth limits. Currently only the `InternetMaxBandwidthOut` parameter is supported.
     * @param string $StartTime Date from which the new bandwidth takes effect. Format: `YYYY-MM-DD`, such as `2016-10-30`. The starting date cannot be earlier than the current date. If the starting date is the current date, the new bandwidth takes effect immediately. This parameter is only valid for prepaid bandwidth. If you specify the parameter for bandwidth with other network billing methods, an error code will be returned.
     * @param string $EndTime Date until which the bandwidth takes effect, in the format of `YYYY-MM-DD`, such as `2016-10-30`. The validity period of the new bandwidth covers the end date. The end date should not be later than the expiration date of a monthly subscription instance. You can obtain the expiration date of an instance through the `ExpiredTime` in the return value from the API [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1). This parameter is only valid for monthly subscription bandwidth, and is not supported for bandwidth billed by other modes. Otherwise, the API will return a corresponding error code.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
