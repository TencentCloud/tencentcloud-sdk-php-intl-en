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
 * Information on disaster recovery groups
 *
 * @method string getDisasterRecoverGroupId() Obtain ID of a spread placement group.
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) Set ID of a spread placement group.
 * @method string getName() Obtain Name of a spread placement group, which must be 1-60 characters long.
 * @method void setName(string $Name) Set Name of a spread placement group, which must be 1-60 characters long.
 * @method string getType() Obtain Type of a spread placement group. Valid values:<br>
<li>HOST: physical machine.<br></li>
<li>SW: switch.<br></li>
<li>RACK: rack.</li>
 * @method void setType(string $Type) Set Type of a spread placement group. Valid values:<br>
<li>HOST: physical machine.<br></li>
<li>SW: switch.<br></li>
<li>RACK: rack.</li>
 * @method integer getCvmQuotaTotal() Obtain The maximum number of CVMs that can be hosted in a spread placement group.
 * @method void setCvmQuotaTotal(integer $CvmQuotaTotal) Set The maximum number of CVMs that can be hosted in a spread placement group.
 * @method integer getCurrentNum() Obtain The current number of CVMs in a spread placement group.
 * @method void setCurrentNum(integer $CurrentNum) Set The current number of CVMs in a spread placement group.
 * @method array getInstanceIds() Obtain The list of CVM IDs in a spread placement group.
Note: This field may return null, indicating that no valid value was found.
 * @method void setInstanceIds(array $InstanceIds) Set The list of CVM IDs in a spread placement group.
Note: This field may return null, indicating that no valid value was found.
 * @method string getCreateTime() Obtain Creation time of a spread placement group.
Note: This field may return null, indicating that no valid value is found.
 * @method void setCreateTime(string $CreateTime) Set Creation time of a spread placement group.
Note: This field may return null, indicating that no valid value is found.
 * @method array getTags() Obtain List of tags associated with the placement group.
 * @method void setTags(array $Tags) Set List of tags associated with the placement group.
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
     * @var string Type of a spread placement group. Valid values:<br>
<li>HOST: physical machine.<br></li>
<li>SW: switch.<br></li>
<li>RACK: rack.</li>
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
     * @var array List of tags associated with the placement group.
     */
    public $Tags;

    /**
     * @param string $DisasterRecoverGroupId ID of a spread placement group.
     * @param string $Name Name of a spread placement group, which must be 1-60 characters long.
     * @param string $Type Type of a spread placement group. Valid values:<br>
<li>HOST: physical machine.<br></li>
<li>SW: switch.<br></li>
<li>RACK: rack.</li>
     * @param integer $CvmQuotaTotal The maximum number of CVMs that can be hosted in a spread placement group.
     * @param integer $CurrentNum The current number of CVMs in a spread placement group.
     * @param array $InstanceIds The list of CVM IDs in a spread placement group.
Note: This field may return null, indicating that no valid value was found.
     * @param string $CreateTime Creation time of a spread placement group.
Note: This field may return null, indicating that no valid value is found.
     * @param array $Tags List of tags associated with the placement group.
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
