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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Patch details
 *
 * @method string getName() Obtain Patch name
 * @method void setName(string $Name) Set Patch name
 * @method string getKbNo() Obtain Patch Number
 * @method void setKbNo(string $KbNo) Set Patch Number
 * @method string getPublishTime() Obtain Disclosure time
 * @method void setPublishTime(string $PublishTime) Set Disclosure time
 * @method integer getEffectHostCount() Obtain Number of affected hosts.
 * @method void setEffectHostCount(integer $EffectHostCount) Set Number of affected hosts.
 * @method integer getRelateVulCount() Obtain Number of associated vulnerabilities
 * @method void setRelateVulCount(integer $RelateVulCount) Set Number of associated vulnerabilities
 * @method array getRelateVulList() Obtain Associated vulnerability ID array
 * @method void setRelateVulList(array $RelateVulList) Set Associated vulnerability ID array
 * @method integer getIsNew() Obtain Whether it is the latest disclosure [0: no | 1: yes], no by default
 * @method void setIsNew(integer $IsNew) Set Whether it is the latest disclosure [0: no | 1: yes], no by default
 * @method string getLastScanTime() Obtain Last scan time
 * @method void setLastScanTime(string $LastScanTime) Set Last scan time
 * @method integer getStatus() Obtain 0 pending, 1 ignored, 3 fixed
 * @method void setStatus(integer $Status) Set 0 pending, 1 ignored, 3 fixed
 * @method string getKbPreCondition() Obtain Prerequisite for installing the kb is generally other KBs, and there may be multiple, with KBs separated by ", "
 * @method void setKbPreCondition(string $KbPreCondition) Set Prerequisite for installing the kb is generally other KBs, and there may be multiple, with KBs separated by ", "
 * @method string getRelatedProduct() Obtain Name of the windows product associated with the kb
 * @method void setRelatedProduct(string $RelatedProduct) Set Name of the windows product associated with the kb
 * @method integer getKbId() Obtain Patch ID
 * @method void setKbId(integer $KbId) Set Patch ID
 * @method string getIds() Obtain Related kb event id collection
 * @method void setIds(string $Ids) Set Related kb event id collection
 */
class EventPatchInfo extends AbstractModel
{
    /**
     * @var string Patch name
     */
    public $Name;

    /**
     * @var string Patch Number
     */
    public $KbNo;

    /**
     * @var string Disclosure time
     */
    public $PublishTime;

    /**
     * @var integer Number of affected hosts.
     */
    public $EffectHostCount;

    /**
     * @var integer Number of associated vulnerabilities
     */
    public $RelateVulCount;

    /**
     * @var array Associated vulnerability ID array
     */
    public $RelateVulList;

    /**
     * @var integer Whether it is the latest disclosure [0: no | 1: yes], no by default
     */
    public $IsNew;

    /**
     * @var string Last scan time
     */
    public $LastScanTime;

    /**
     * @var integer 0 pending, 1 ignored, 3 fixed
     */
    public $Status;

    /**
     * @var string Prerequisite for installing the kb is generally other KBs, and there may be multiple, with KBs separated by ", "
     */
    public $KbPreCondition;

    /**
     * @var string Name of the windows product associated with the kb
     */
    public $RelatedProduct;

    /**
     * @var integer Patch ID
     */
    public $KbId;

    /**
     * @var string Related kb event id collection
     */
    public $Ids;

    /**
     * @param string $Name Patch name
     * @param string $KbNo Patch Number
     * @param string $PublishTime Disclosure time
     * @param integer $EffectHostCount Number of affected hosts.
     * @param integer $RelateVulCount Number of associated vulnerabilities
     * @param array $RelateVulList Associated vulnerability ID array
     * @param integer $IsNew Whether it is the latest disclosure [0: no | 1: yes], no by default
     * @param string $LastScanTime Last scan time
     * @param integer $Status 0 pending, 1 ignored, 3 fixed
     * @param string $KbPreCondition Prerequisite for installing the kb is generally other KBs, and there may be multiple, with KBs separated by ", "
     * @param string $RelatedProduct Name of the windows product associated with the kb
     * @param integer $KbId Patch ID
     * @param string $Ids Related kb event id collection
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("KbNo",$param) and $param["KbNo"] !== null) {
            $this->KbNo = $param["KbNo"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("EffectHostCount",$param) and $param["EffectHostCount"] !== null) {
            $this->EffectHostCount = $param["EffectHostCount"];
        }

        if (array_key_exists("RelateVulCount",$param) and $param["RelateVulCount"] !== null) {
            $this->RelateVulCount = $param["RelateVulCount"];
        }

        if (array_key_exists("RelateVulList",$param) and $param["RelateVulList"] !== null) {
            $this->RelateVulList = $param["RelateVulList"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("KbPreCondition",$param) and $param["KbPreCondition"] !== null) {
            $this->KbPreCondition = $param["KbPreCondition"];
        }

        if (array_key_exists("RelatedProduct",$param) and $param["RelatedProduct"] !== null) {
            $this->RelatedProduct = $param["RelatedProduct"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }
    }
}
