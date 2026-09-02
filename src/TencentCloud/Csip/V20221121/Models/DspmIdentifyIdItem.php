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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dspm identity id information
 *
 * @method string getIdentifyId() Obtain Identity id.
 * @method void setIdentifyId(string $IdentifyId) Set Identity id.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method integer getIdentifyType() Obtain Identity type. 0: undefined; 2: long-term identity; 3: temporary identity
 * @method void setIdentifyType(integer $IdentifyType) Set Identity type. 0: undefined; 2: long-term identity; 3: temporary identity
 * @method DspmUinUser getOwnerUin() Obtain User belonging to the cloud account uin.
 * @method void setOwnerUin(DspmUinUser $OwnerUin) Set User belonging to the cloud account uin.
 * @method DspmUinUser getCreatorUin() Obtain Creator account uin user.
 * @method void setCreatorUin(DspmUinUser $CreatorUin) Set Creator account uin user.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method integer getStatus() Obtain Status. 0: inactive; 1: active
 * @method void setStatus(integer $Status) Set Status. 0: inactive; 1: active
 * @method DspmPersonUser getPerson() Obtain Information of the personal user it belongs to
 * @method void setPerson(DspmPersonUser $Person) Set Information of the personal user it belongs to
 */
class DspmIdentifyIdItem extends AbstractModel
{
    /**
     * @var string Identity id.
     */
    public $IdentifyId;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var integer Identity type. 0: undefined; 2: long-term identity; 3: temporary identity
     */
    public $IdentifyType;

    /**
     * @var DspmUinUser User belonging to the cloud account uin.
     */
    public $OwnerUin;

    /**
     * @var DspmUinUser Creator account uin user.
     */
    public $CreatorUin;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var integer Status. 0: inactive; 1: active
     */
    public $Status;

    /**
     * @var DspmPersonUser Information of the personal user it belongs to
     */
    public $Person;

    /**
     * @param string $IdentifyId Identity id.
     * @param string $Remark Remarks.
     * @param integer $IdentifyType Identity type. 0: undefined; 2: long-term identity; 3: temporary identity
     * @param DspmUinUser $OwnerUin User belonging to the cloud account uin.
     * @param DspmUinUser $CreatorUin Creator account uin user.
     * @param string $CreateTime Creation time.
     * @param integer $Status Status. 0: inactive; 1: active
     * @param DspmPersonUser $Person Information of the personal user it belongs to
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
        if (array_key_exists("IdentifyId",$param) and $param["IdentifyId"] !== null) {
            $this->IdentifyId = $param["IdentifyId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("IdentifyType",$param) and $param["IdentifyType"] !== null) {
            $this->IdentifyType = $param["IdentifyType"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = new DspmUinUser();
            $this->OwnerUin->deserialize($param["OwnerUin"]);
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = new DspmUinUser();
            $this->CreatorUin->deserialize($param["CreatorUin"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = new DspmPersonUser();
            $this->Person->deserialize($param["Person"]);
        }
    }
}
