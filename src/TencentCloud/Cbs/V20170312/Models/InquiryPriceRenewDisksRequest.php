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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getDiskIds() Obtain ID of the cloud disk, which can be queried via the API [DescribeDisks](/document/product/362/16315).
 * @method void setDiskIds(array $DiskIds) Set ID of the cloud disk, which can be queried via the API [DescribeDisks](/document/product/362/16315).
 * @method array getDiskChargePrepaids() Obtain Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase usage period can be specified using this parameter. If this parameter is specified as CurInstanceDeadline, then it will be renewed according to the aligned CVM expiration time. If it is a batch renewal price query, then this parameter will correspond to the Disks parameter, and the element quantity needs to be kept the same.
 * @method void setDiskChargePrepaids(array $DiskChargePrepaids) Set Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase usage period can be specified using this parameter. If this parameter is specified as CurInstanceDeadline, then it will be renewed according to the aligned CVM expiration time. If it is a batch renewal price query, then this parameter will correspond to the Disks parameter, and the element quantity needs to be kept the same.
 * @method string getNewDeadline() Obtain Specify the new expiration time of the cloud disk, in such format as 2017-12-17 00:00:00. The parameters `NewDeadline` and `DiskChargePrepaids` are two options to specify the inquiry length, and you must specify at least one.
 * @method void setNewDeadline(string $NewDeadline) Set Specify the new expiration time of the cloud disk, in such format as 2017-12-17 00:00:00. The parameters `NewDeadline` and `DiskChargePrepaids` are two options to specify the inquiry length, and you must specify at least one.
 * @method integer getProjectId() Obtain ID of project the cloud disk belongs to. If selected, it can only be used for authentication.
 * @method void setProjectId(integer $ProjectId) Set ID of project the cloud disk belongs to. If selected, it can only be used for authentication.
 */

/**
 *InquiryPriceRenewDisks request structure.
 */
class InquiryPriceRenewDisksRequest extends AbstractModel
{
    /**
     * @var array ID of the cloud disk, which can be queried via the API [DescribeDisks](/document/product/362/16315).
     */
    public $DiskIds;

    /**
     * @var array Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase usage period can be specified using this parameter. If this parameter is specified as CurInstanceDeadline, then it will be renewed according to the aligned CVM expiration time. If it is a batch renewal price query, then this parameter will correspond to the Disks parameter, and the element quantity needs to be kept the same.
     */
    public $DiskChargePrepaids;

    /**
     * @var string Specify the new expiration time of the cloud disk, in such format as 2017-12-17 00:00:00. The parameters `NewDeadline` and `DiskChargePrepaids` are two options to specify the inquiry length, and you must specify at least one.
     */
    public $NewDeadline;

    /**
     * @var integer ID of project the cloud disk belongs to. If selected, it can only be used for authentication.
     */
    public $ProjectId;
    /**
     * @param array $DiskIds ID of the cloud disk, which can be queried via the API [DescribeDisks](/document/product/362/16315).
     * @param array $DiskChargePrepaids Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase usage period can be specified using this parameter. If this parameter is specified as CurInstanceDeadline, then it will be renewed according to the aligned CVM expiration time. If it is a batch renewal price query, then this parameter will correspond to the Disks parameter, and the element quantity needs to be kept the same.
     * @param string $NewDeadline Specify the new expiration time of the cloud disk, in such format as 2017-12-17 00:00:00. The parameters `NewDeadline` and `DiskChargePrepaids` are two options to specify the inquiry length, and you must specify at least one.
     * @param integer $ProjectId ID of project the cloud disk belongs to. If selected, it can only be used for authentication.
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
