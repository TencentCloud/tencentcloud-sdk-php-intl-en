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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSimpleApplicationInfoList request structure.
 *
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method integer getLimit() Obtain Number of results per page
 * @method void setLimit(integer $Limit) Set Number of results per page
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 * @method string getKeyword() Obtain Query keywords (application name)
 * @method void setKeyword(string $Keyword) Set Query keywords (application name)
 * @method boolean getLoadAssistantApp() Obtain Whether TCMPP Assistant is loaded
 * @method void setLoadAssistantApp(boolean $LoadAssistantApp) Set Whether TCMPP Assistant is loaded
 * @method string getMNPId() Obtain Mini program ID
 * @method void setMNPId(string $MNPId) Set Mini program ID
 */
class DescribeSimpleApplicationInfoListRequest extends AbstractModel
{
    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @var integer Number of results per page
     */
    public $Limit;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @var string Query keywords (application name)
     */
    public $Keyword;

    /**
     * @var boolean Whether TCMPP Assistant is loaded
     */
    public $LoadAssistantApp;

    /**
     * @var string Mini program ID
     */
    public $MNPId;

    /**
     * @param integer $Offset Pagination offset
     * @param integer $Limit Number of results per page
     * @param string $PlatformId Platform ID
     * @param string $Keyword Query keywords (application name)
     * @param boolean $LoadAssistantApp Whether TCMPP Assistant is loaded
     * @param string $MNPId Mini program ID
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("LoadAssistantApp",$param) and $param["LoadAssistantApp"] !== null) {
            $this->LoadAssistantApp = $param["LoadAssistantApp"];
        }

        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }
    }
}
