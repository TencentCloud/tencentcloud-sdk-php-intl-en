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
 * @method string getDisasterRecoverGroupId() 获取ID of a spread placement group.
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) 设置ID of a spread placement group.
 * @method string getName() 获取Name of a spread placement group, which must be 1-60 characters long.
 * @method void setName(string $Name) 设置Name of a spread placement group, which must be 1-60 characters long.
 * @method string getType() 获取Type of a spread placement group. Valid values: <br><li>HOST: physical machine <br><li>SW: switch <br><li>RACK: rack.
 * @method void setType(string $Type) 设置Type of a spread placement group. Valid values: <br><li>HOST: physical machine <br><li>SW: switch <br><li>RACK: rack.
 * @method integer getCvmQuotaTotal() 获取The maximum number of CVMs that can be hosted in a spread placement group.
 * @method void setCvmQuotaTotal(integer $CvmQuotaTotal) 设置The maximum number of CVMs that can be hosted in a spread placement group.
 * @method integer getCurrentNum() 获取The current number of CVMs in a spread placement group.
 * @method void setCurrentNum(integer $CurrentNum) 设置The current number of CVMs in a spread placement group.
 * @method array getInstanceIds() 获取The list of CVM IDs in a spread placement group.
Note: This field may return null, indicating that no valid value was found.
 * @method void setInstanceIds(array $InstanceIds) 设置The list of CVM IDs in a spread placement group.
Note: This field may return null, indicating that no valid value was found.
 * @method string getCreateTime() 获取Creation time of a spread placement group.
Note: This field may return null, indicating that no valid value is found.
 * @method void setCreateTime(string $CreateTime) 设置Creation time of a spread placement group.
Note: This field may return null, indicating that no valid value is found.
 */

/**
 *Information on disaster recovery groups
 */
class DisasterRecoverGroup extends AbstractModel
{
    /**
     * @var string ID of a spread placement group.
     */
    public $DisasterRecoverGroupId;

    /**
     * @var string Name of a spread placement group, which must be 1-60 characters long.
     */
    public $Name;

    /**
     * @var string Type of a spread placement group. Valid values: <br><li>HOST: physical machine <br><li>SW: switch <br><li>RACK: rack.
     */
    public $Type;

    /**
     * @var integer The maximum number of CVMs that can be hosted in a spread placement group.
     */
    public $CvmQuotaTotal;

    /**
     * @var integer The current number of CVMs in a spread placement group.
     */
    public $CurrentNum;

    /**
     * @var array The list of CVM IDs in a spread placement group.
Note: This field may return null, indicating that no valid value was found.
     */
    public $InstanceIds;

    /**
     * @var string Creation time of a spread placement group.
Note: This field may return null, indicating that no valid value is found.
     */
    public $CreateTime;
    /**
     * @param string $DisasterRecoverGroupId ID of a spread placement group.
     * @param string $Name Name of a spread placement group, which must be 1-60 characters long.
     * @param string $Type Type of a spread placement group. Valid values: <br><li>HOST: physical machine <br><li>SW: switch <br><li>RACK: rack.
     * @param integer $CvmQuotaTotal The maximum number of CVMs that can be hosted in a spread placement group.
     * @param integer $CurrentNum The current number of CVMs in a spread placement group.
     * @param array $InstanceIds The list of CVM IDs in a spread placement group.
Note: This field may return null, indicating that no valid value was found.
     * @param string $CreateTime Creation time of a spread placement group.
Note: This field may return null, indicating that no valid value is found.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CvmQuotaTotal",$param) and $param["CvmQuotaTotal"] !== null) {
            $this->CvmQuotaTotal = $param["CvmQuotaTotal"];
        }

        if (array_key_exists("CurrentNum",$param) and $param["CurrentNum"] !== null) {
            $this->CurrentNum = $param["CurrentNum"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
