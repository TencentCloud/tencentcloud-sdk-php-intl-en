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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAttributeLabel request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method string getAttributeBizId() Obtain Attribute ID.
 * @method void setAttributeBizId(string $AttributeBizId) Set Attribute ID.
 * @method integer getLimit() Obtain Quantity loaded each time. 
 * @method void setLimit(integer $Limit) Set Quantity loaded each time. 
 * @method string getLoginUin() Obtain Log in to user's root account (required in integrator mode).
 * @method void setLoginUin(string $LoginUin) Set Log in to user's root account (required in integrator mode).
 * @method string getLoginSubAccountUin() Obtain Log in to user's sub-account (required in integrator mode).
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set Log in to user's sub-account (required in integrator mode).
 * @method string getQuery() Obtain Query a label or similar labels.
 * @method void setQuery(string $Query) Set Query a label or similar labels.
 * @method string getLastLabelBizId() Obtain The label ID of the scroll loading cursor.
 * @method void setLastLabelBizId(string $LastLabelBizId) Set The label ID of the scroll loading cursor.
 * @method string getQueryScope() Obtain Query scope: 
all (or leave it blank): standard words and similar words 
standard: standard words 
similar: similar words
 * @method void setQueryScope(string $QueryScope) Set Query scope: 
all (or leave it blank): standard words and similar words 
standard: standard words 
similar: similar words
 */
class DescribeAttributeLabelRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var string Attribute ID.
     */
    public $AttributeBizId;

    /**
     * @var integer Quantity loaded each time. 
     */
    public $Limit;

    /**
     * @var string Log in to user's root account (required in integrator mode).
     */
    public $LoginUin;

    /**
     * @var string Log in to user's sub-account (required in integrator mode).
     */
    public $LoginSubAccountUin;

    /**
     * @var string Query a label or similar labels.
     */
    public $Query;

    /**
     * @var string The label ID of the scroll loading cursor.
     */
    public $LastLabelBizId;

    /**
     * @var string Query scope: 
all (or leave it blank): standard words and similar words 
standard: standard words 
similar: similar words
     */
    public $QueryScope;

    /**
     * @param string $BotBizId Application ID.
     * @param string $AttributeBizId Attribute ID.
     * @param integer $Limit Quantity loaded each time. 
     * @param string $LoginUin Log in to user's root account (required in integrator mode).
     * @param string $LoginSubAccountUin Log in to user's sub-account (required in integrator mode).
     * @param string $Query Query a label or similar labels.
     * @param string $LastLabelBizId The label ID of the scroll loading cursor.
     * @param string $QueryScope Query scope: 
all (or leave it blank): standard words and similar words 
standard: standard words 
similar: similar words
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("AttributeBizId",$param) and $param["AttributeBizId"] !== null) {
            $this->AttributeBizId = $param["AttributeBizId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("LastLabelBizId",$param) and $param["LastLabelBizId"] !== null) {
            $this->LastLabelBizId = $param["LastLabelBizId"];
        }

        if (array_key_exists("QueryScope",$param) and $param["QueryScope"] !== null) {
            $this->QueryScope = $param["QueryScope"];
        }
    }
}
