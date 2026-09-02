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
 * Windows KB detailed information
 *
 * @method integer getID() Obtain <p>KB patch internal ID (kb_info.id)</p>
 * @method void setID(integer $ID) Set <p>KB patch internal ID (kb_info.id)</p>
 * @method string getNumber() Obtain <p>KB No.<br>Parameter format: e.g. KB5001234</p>
 * @method void setNumber(string $Number) Set <p>KB No.<br>Parameter format: e.g. KB5001234</p>
 * @method string getName() Obtain <p>KB patch name</p>
 * @method void setName(string $Name) Set <p>KB patch name</p>
 * @method string getReferUrl() Obtain <p>Reference link (Microsoft Official Documentation address)</p>
 * @method void setReferUrl(string $ReferUrl) Set <p>Reference link (Microsoft Official Documentation address)</p>
 * @method string getPublishTime() Obtain <p>Release time<br>Parameter format: YYYY-MM-DD HH:mm:ss</p>
 * @method void setPublishTime(string $PublishTime) Set <p>Release time<br>Parameter format: YYYY-MM-DD HH:mm:ss</p>
 * @method boolean getNeedRestart() Obtain <p>Whether restart is required after installing this KB<br>Enumeration values:<br>true: required<br>false: not required</p>
 * @method void setNeedRestart(boolean $NeedRestart) Set <p>Whether restart is required after installing this KB<br>Enumeration values:<br>true: required<br>false: not required</p>
 * @method array getRelateVulList() Obtain <p>Associated vulnerability list</p>
 * @method void setRelateVulList(array $RelateVulList) Set <p>Associated vulnerability list</p>
 * @method integer getRelateVulCount() Obtain <p>Total number of associated vulnerabilities</p>
 * @method void setRelateVulCount(integer $RelateVulCount) Set <p>Total number of associated vulnerabilities</p>
 * @method string getRelateProduct() Obtain <p>Associated os version</p>
 * @method void setRelateProduct(string $RelateProduct) Set <p>Associated os version</p>
 */
class KBDetail extends AbstractModel
{
    /**
     * @var integer <p>KB patch internal ID (kb_info.id)</p>
     */
    public $ID;

    /**
     * @var string <p>KB No.<br>Parameter format: e.g. KB5001234</p>
     */
    public $Number;

    /**
     * @var string <p>KB patch name</p>
     */
    public $Name;

    /**
     * @var string <p>Reference link (Microsoft Official Documentation address)</p>
     */
    public $ReferUrl;

    /**
     * @var string <p>Release time<br>Parameter format: YYYY-MM-DD HH:mm:ss</p>
     */
    public $PublishTime;

    /**
     * @var boolean <p>Whether restart is required after installing this KB<br>Enumeration values:<br>true: required<br>false: not required</p>
     */
    public $NeedRestart;

    /**
     * @var array <p>Associated vulnerability list</p>
     */
    public $RelateVulList;

    /**
     * @var integer <p>Total number of associated vulnerabilities</p>
     */
    public $RelateVulCount;

    /**
     * @var string <p>Associated os version</p>
     */
    public $RelateProduct;

    /**
     * @param integer $ID <p>KB patch internal ID (kb_info.id)</p>
     * @param string $Number <p>KB No.<br>Parameter format: e.g. KB5001234</p>
     * @param string $Name <p>KB patch name</p>
     * @param string $ReferUrl <p>Reference link (Microsoft Official Documentation address)</p>
     * @param string $PublishTime <p>Release time<br>Parameter format: YYYY-MM-DD HH:mm:ss</p>
     * @param boolean $NeedRestart <p>Whether restart is required after installing this KB<br>Enumeration values:<br>true: required<br>false: not required</p>
     * @param array $RelateVulList <p>Associated vulnerability list</p>
     * @param integer $RelateVulCount <p>Total number of associated vulnerabilities</p>
     * @param string $RelateProduct <p>Associated os version</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ReferUrl",$param) and $param["ReferUrl"] !== null) {
            $this->ReferUrl = $param["ReferUrl"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("RelateVulList",$param) and $param["RelateVulList"] !== null) {
            $this->RelateVulList = [];
            foreach ($param["RelateVulList"] as $key => $value){
                $obj = new VulBriefInfo();
                $obj->deserialize($value);
                array_push($this->RelateVulList, $obj);
            }
        }

        if (array_key_exists("RelateVulCount",$param) and $param["RelateVulCount"] !== null) {
            $this->RelateVulCount = $param["RelateVulCount"];
        }

        if (array_key_exists("RelateProduct",$param) and $param["RelateProduct"] !== null) {
            $this->RelateProduct = $param["RelateProduct"];
        }
    }
}
