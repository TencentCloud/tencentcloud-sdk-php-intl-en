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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceRenewDisks request structure.
 *
 * @method array getDiskIds() Obtain Cloud disk ID, which can be queried by calling the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) API.
 * @method void setDiskIds(array $DiskIds) Set Cloud disk ID, which can be queried by calling the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) API.
 * @method array getDiskChargePrepaids() Obtain Prepaid mode, that is, settings related to the monthly subscription. Through this parameter, you can specify the purchase duration of the monthly subscribed cloud disk. If CurInstanceDeadline is specified in this parameter, it will be renewed in aligned with the sub-machine expiration time. If it is a batch renewal inquiry, this parameter corresponds one-to-one with the Disks parameter, and the number of Element (XML) must be consistent.
 * @method void setDiskChargePrepaids(array $DiskChargePrepaids) Set Prepaid mode, that is, settings related to the monthly subscription. Through this parameter, you can specify the purchase duration of the monthly subscribed cloud disk. If CurInstanceDeadline is specified in this parameter, it will be renewed in aligned with the sub-machine expiration time. If it is a batch renewal inquiry, this parameter corresponds one-to-one with the Disks parameter, and the number of Element (XML) must be consistent.
 * @method string getNewDeadline() Obtain Specifies the new expiry time of the CBS in the format such as 2017-12-17 00:00:00. parameter `NewDeadline` and `DiskChargePrepaids` are two ways to specify inquiry duration. one of them must be input.
 * @method void setNewDeadline(string $NewDeadline) Set Specifies the new expiry time of the CBS in the format such as 2017-12-17 00:00:00. parameter `NewDeadline` and `DiskChargePrepaids` are two ways to specify inquiry duration. one of them must be input.
 * @method integer getProjectId() Obtain cloud disk project ID. obtain this parameter by calling the projectId field in the return value of [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1). if input, it is only for authentication.
 * @method void setProjectId(integer $ProjectId) Set cloud disk project ID. obtain this parameter by calling the projectId field in the return value of [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1). if input, it is only for authentication.
 */
class InquiryPriceRenewDisksRequest extends AbstractModel
{
    /**
     * @var array Cloud disk ID, which can be queried by calling the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) API.
     */
    public $DiskIds;

    /**
     * @var array Prepaid mode, that is, settings related to the monthly subscription. Through this parameter, you can specify the purchase duration of the monthly subscribed cloud disk. If CurInstanceDeadline is specified in this parameter, it will be renewed in aligned with the sub-machine expiration time. If it is a batch renewal inquiry, this parameter corresponds one-to-one with the Disks parameter, and the number of Element (XML) must be consistent.
     */
    public $DiskChargePrepaids;

    /**
     * @var string Specifies the new expiry time of the CBS in the format such as 2017-12-17 00:00:00. parameter `NewDeadline` and `DiskChargePrepaids` are two ways to specify inquiry duration. one of them must be input.
     */
    public $NewDeadline;

    /**
     * @var integer cloud disk project ID. obtain this parameter by calling the projectId field in the return value of [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1). if input, it is only for authentication.
     */
    public $ProjectId;

    /**
     * @param array $DiskIds Cloud disk ID, which can be queried by calling the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) API.
     * @param array $DiskChargePrepaids Prepaid mode, that is, settings related to the monthly subscription. Through this parameter, you can specify the purchase duration of the monthly subscribed cloud disk. If CurInstanceDeadline is specified in this parameter, it will be renewed in aligned with the sub-machine expiration time. If it is a batch renewal inquiry, this parameter corresponds one-to-one with the Disks parameter, and the number of Element (XML) must be consistent.
     * @param string $NewDeadline Specifies the new expiry time of the CBS in the format such as 2017-12-17 00:00:00. parameter `NewDeadline` and `DiskChargePrepaids` are two ways to specify inquiry duration. one of them must be input.
     * @param integer $ProjectId cloud disk project ID. obtain this parameter by calling the projectId field in the return value of [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1). if input, it is only for authentication.
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("DiskChargePrepaids",$param) and $param["DiskChargePrepaids"] !== null) {
            $this->DiskChargePrepaids = [];
            foreach ($param["DiskChargePrepaids"] as $key => $value){
                $obj = new DiskChargePrepaid();
                $obj->deserialize($value);
                array_push($this->DiskChargePrepaids, $obj);
            }
        }

        if (array_key_exists("NewDeadline",$param) and $param["NewDeadline"] !== null) {
            $this->NewDeadline = $param["NewDeadline"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
