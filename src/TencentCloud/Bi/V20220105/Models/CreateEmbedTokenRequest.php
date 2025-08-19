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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEmbedToken request structure.
 *
 * @method integer getProjectId() Obtain Shares the project ID.
 * @method void setProjectId(integer $ProjectId) Set Shares the project ID.
 * @method integer getPageId() Obtain Shares the page ID. This field is empty (0) for embedding a dashboard and is not passed for embedding ChatBI.
 * @method void setPageId(integer $PageId) Set Shares the page ID. This field is empty (0) for embedding a dashboard and is not passed for embedding ChatBI.
 * @method string getIntention() Obtain "embed" indicates page dashboard embedding, and "chatBIEmbed" indicates ChatBI embedding.
 * @method void setIntention(string $Intention) Set "embed" indicates page dashboard embedding, and "chatBIEmbed" indicates ChatBI embedding.
 * @method string getScope() Obtain "page" indicates embedding a page, "panel" indicates embedding the entire dashboard, and "project" is used for ChatBI embedding.
 * @method void setScope(string $Scope) Set "page" indicates embedding a page, "panel" indicates embedding the entire dashboard, and "project" is used for ChatBI embedding.
 * @method string getExpireTime() Obtain Expiration time. Unit: minutes. Maximum value: 240 (namely, 4 hours). Default value: 240.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time. Unit: minutes. Maximum value: 240 (namely, 4 hours). Default value: 240.
 * @method string getExtraParam() Obtain Alternate field.
 * @method void setExtraParam(string $ExtraParam) Set Alternate field.
 * @method string getUserCorpId() Obtain User enterprise ID (only used for multi-user).
 * @method void setUserCorpId(string $UserCorpId) Set User enterprise ID (only used for multi-user).
 * @method string getUserId() Obtain User ID (only used for multi-user).
 * @method void setUserId(string $UserId) Set User ID (only used for multi-user).
 * @method integer getTicketNum() Obtain Access count limit (range: 1-99999). Leave empty to disable access restrictions.
 * @method void setTicketNum(integer $TicketNum) Set Access count limit (range: 1-99999). Leave empty to disable access restrictions.
 * @method string getGlobalParam() Obtain Global filter parameters: Applies to all report filter criteria. Should be formatted as a JSON string.
** Currently, only character-type page parameters can be bound to global parameters.
**
[
    {
"ParamKey": "name", page parameter name.
"JoinType": "AND", // connection method. Currently, only AND is supported.
        "WhereList": [
            {
"Operator": "-neq", // operator. Refer to the following instructions.
"Value": [ action value. For a single-value array, only one value is passed.
                    "zZWJMD",
                    "ZzVGHX",
"Hunan province".
"Hebei province".
                ]
            }
        ]
    },
    {
        "ParamKey": "genderParam",
        "JoinType": "AND",
        "WhereList": [
            {
                "Operator": "-neq",
                "Value": [
"Male".
                ]
            }
        ]
    }
]



Currently supported operators.
 -neq not equal to != operator.
 -eq equal to = operator.
 -is in operator.

 * @method void setGlobalParam(string $GlobalParam) Set Global filter parameters: Applies to all report filter criteria. Should be formatted as a JSON string.
** Currently, only character-type page parameters can be bound to global parameters.
**
[
    {
"ParamKey": "name", page parameter name.
"JoinType": "AND", // connection method. Currently, only AND is supported.
        "WhereList": [
            {
"Operator": "-neq", // operator. Refer to the following instructions.
"Value": [ action value. For a single-value array, only one value is passed.
                    "zZWJMD",
                    "ZzVGHX",
"Hunan province".
"Hebei province".
                ]
            }
        ]
    },
    {
        "ParamKey": "genderParam",
        "JoinType": "AND",
        "WhereList": [
            {
                "Operator": "-neq",
                "Value": [
"Male".
                ]
            }
        ]
    }
]



Currently supported operators.
 -neq not equal to != operator.
 -eq equal to = operator.
 -is in operator.

 * @method integer getTokenType() Obtain 100: no user bound. Create 1 token at a time. UserCorpId and UserId are optional. ChatBI embedding is not supported.
200: single token per user. Create 1 token at a time. UserCorpId and UserId required.
300: multiple tokens per user. Create multiple tokens at a time. UserCorpId and UserId required.
 * @method void setTokenType(integer $TokenType) Set 100: no user bound. Create 1 token at a time. UserCorpId and UserId are optional. ChatBI embedding is not supported.
200: single token per user. Create 1 token at a time. UserCorpId and UserId required.
300: multiple tokens per user. Create multiple tokens at a time. UserCorpId and UserId required.
 * @method integer getTokenNum() Obtain The number of tokens created at one time.
 * @method void setTokenNum(integer $TokenNum) Set The number of tokens created at one time.
 * @method string getConfigParam() Obtain Embedded display configurations: Currently for ChatBI embedding scenarios; TableFilter represents data table list filtering, SqlView represents SQL view feature.
 * @method void setConfigParam(string $ConfigParam) Set Embedded display configurations: Currently for ChatBI embedding scenarios; TableFilter represents data table list filtering, SqlView represents SQL view feature.
 */
class CreateEmbedTokenRequest extends AbstractModel
{
    /**
     * @var integer Shares the project ID.
     */
    public $ProjectId;

    /**
     * @var integer Shares the page ID. This field is empty (0) for embedding a dashboard and is not passed for embedding ChatBI.
     */
    public $PageId;

    /**
     * @var string "embed" indicates page dashboard embedding, and "chatBIEmbed" indicates ChatBI embedding.
     */
    public $Intention;

    /**
     * @var string "page" indicates embedding a page, "panel" indicates embedding the entire dashboard, and "project" is used for ChatBI embedding.
     */
    public $Scope;

    /**
     * @var string Expiration time. Unit: minutes. Maximum value: 240 (namely, 4 hours). Default value: 240.
     */
    public $ExpireTime;

    /**
     * @var string Alternate field.
     */
    public $ExtraParam;

    /**
     * @var string User enterprise ID (only used for multi-user).
     */
    public $UserCorpId;

    /**
     * @var string User ID (only used for multi-user).
     */
    public $UserId;

    /**
     * @var integer Access count limit (range: 1-99999). Leave empty to disable access restrictions.
     */
    public $TicketNum;

    /**
     * @var string Global filter parameters: Applies to all report filter criteria. Should be formatted as a JSON string.
** Currently, only character-type page parameters can be bound to global parameters.
**
[
    {
"ParamKey": "name", page parameter name.
"JoinType": "AND", // connection method. Currently, only AND is supported.
        "WhereList": [
            {
"Operator": "-neq", // operator. Refer to the following instructions.
"Value": [ action value. For a single-value array, only one value is passed.
                    "zZWJMD",
                    "ZzVGHX",
"Hunan province".
"Hebei province".
                ]
            }
        ]
    },
    {
        "ParamKey": "genderParam",
        "JoinType": "AND",
        "WhereList": [
            {
                "Operator": "-neq",
                "Value": [
"Male".
                ]
            }
        ]
    }
]



Currently supported operators.
 -neq not equal to != operator.
 -eq equal to = operator.
 -is in operator.

     */
    public $GlobalParam;

    /**
     * @var integer 100: no user bound. Create 1 token at a time. UserCorpId and UserId are optional. ChatBI embedding is not supported.
200: single token per user. Create 1 token at a time. UserCorpId and UserId required.
300: multiple tokens per user. Create multiple tokens at a time. UserCorpId and UserId required.
     */
    public $TokenType;

    /**
     * @var integer The number of tokens created at one time.
     */
    public $TokenNum;

    /**
     * @var string Embedded display configurations: Currently for ChatBI embedding scenarios; TableFilter represents data table list filtering, SqlView represents SQL view feature.
     */
    public $ConfigParam;

    /**
     * @param integer $ProjectId Shares the project ID.
     * @param integer $PageId Shares the page ID. This field is empty (0) for embedding a dashboard and is not passed for embedding ChatBI.
     * @param string $Intention "embed" indicates page dashboard embedding, and "chatBIEmbed" indicates ChatBI embedding.
     * @param string $Scope "page" indicates embedding a page, "panel" indicates embedding the entire dashboard, and "project" is used for ChatBI embedding.
     * @param string $ExpireTime Expiration time. Unit: minutes. Maximum value: 240 (namely, 4 hours). Default value: 240.
     * @param string $ExtraParam Alternate field.
     * @param string $UserCorpId User enterprise ID (only used for multi-user).
     * @param string $UserId User ID (only used for multi-user).
     * @param integer $TicketNum Access count limit (range: 1-99999). Leave empty to disable access restrictions.
     * @param string $GlobalParam Global filter parameters: Applies to all report filter criteria. Should be formatted as a JSON string.
** Currently, only character-type page parameters can be bound to global parameters.
**
[
    {
"ParamKey": "name", page parameter name.
"JoinType": "AND", // connection method. Currently, only AND is supported.
        "WhereList": [
            {
"Operator": "-neq", // operator. Refer to the following instructions.
"Value": [ action value. For a single-value array, only one value is passed.
                    "zZWJMD",
                    "ZzVGHX",
"Hunan province".
"Hebei province".
                ]
            }
        ]
    },
    {
        "ParamKey": "genderParam",
        "JoinType": "AND",
        "WhereList": [
            {
                "Operator": "-neq",
                "Value": [
"Male".
                ]
            }
        ]
    }
]



Currently supported operators.
 -neq not equal to != operator.
 -eq equal to = operator.
 -is in operator.

     * @param integer $TokenType 100: no user bound. Create 1 token at a time. UserCorpId and UserId are optional. ChatBI embedding is not supported.
200: single token per user. Create 1 token at a time. UserCorpId and UserId required.
300: multiple tokens per user. Create multiple tokens at a time. UserCorpId and UserId required.
     * @param integer $TokenNum The number of tokens created at one time.
     * @param string $ConfigParam Embedded display configurations: Currently for ChatBI embedding scenarios; TableFilter represents data table list filtering, SqlView represents SQL view feature.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("Intention",$param) and $param["Intention"] !== null) {
            $this->Intention = $param["Intention"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = $param["ExtraParam"];
        }

        if (array_key_exists("UserCorpId",$param) and $param["UserCorpId"] !== null) {
            $this->UserCorpId = $param["UserCorpId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("TicketNum",$param) and $param["TicketNum"] !== null) {
            $this->TicketNum = $param["TicketNum"];
        }

        if (array_key_exists("GlobalParam",$param) and $param["GlobalParam"] !== null) {
            $this->GlobalParam = $param["GlobalParam"];
        }

        if (array_key_exists("TokenType",$param) and $param["TokenType"] !== null) {
            $this->TokenType = $param["TokenType"];
        }

        if (array_key_exists("TokenNum",$param) and $param["TokenNum"] !== null) {
            $this->TokenNum = $param["TokenNum"];
        }

        if (array_key_exists("ConfigParam",$param) and $param["ConfigParam"] !== null) {
            $this->ConfigParam = $param["ConfigParam"];
        }
    }
}
