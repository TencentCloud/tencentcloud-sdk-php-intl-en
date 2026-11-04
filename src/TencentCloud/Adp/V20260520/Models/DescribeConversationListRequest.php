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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConversationList request structure.
 *
 * @method integer getType() Obtain <p>Session type. Pass CONVERSATION_TYPE_UNSPECIFIED to indicate all. Enumeration values: 0-CONVERSATION_TYPE_UNSPECIFIED (not specified; means all in list query), 1-CONVERSATION_TYPE_VISITOR (visitor trial), 2-CONVERSATION_TYPE_EVALUATION (evaluation), 5-CONVERSATION_TYPE_API (API integration), 10-CONVERSATION_TYPE_WORKFLOW (workflow debugging), 20-CONVERSATION_TYPE_SHARE (share a link)</p>
 * @method void setType(integer $Type) Set <p>Session type. Pass CONVERSATION_TYPE_UNSPECIFIED to indicate all. Enumeration values: 0-CONVERSATION_TYPE_UNSPECIFIED (not specified; means all in list query), 1-CONVERSATION_TYPE_VISITOR (visitor trial), 2-CONVERSATION_TYPE_EVALUATION (evaluation), 5-CONVERSATION_TYPE_API (API integration), 10-CONVERSATION_TYPE_WORKFLOW (workflow debugging), 20-CONVERSATION_TYPE_SHARE (share a link)</p>
 * @method string getAppId() Obtain <p>App ID</p>
 * @method void setAppId(string $AppId) Set <p>App ID</p>
 * @method string getAppKey() Obtain <p>Required when Type=CONVERSATION_TYPE_API. Application key</p>
 * @method void setAppKey(string $AppKey) Set <p>Required when Type=CONVERSATION_TYPE_API. Application key</p>
 * @method string getKeyword() Obtain <p>Keyword</p>
 * @method void setKeyword(string $Keyword) Set <p>Keyword</p>
 * @method integer getLimit() Obtain <p>Number limit (integer), used in conjunction with Offset</p>
 * @method void setLimit(integer $Limit) Set <p>Number limit (integer), used in conjunction with Offset</p>
 * @method string getLoginSubAccountUin() Obtain <p>Sub-account Uin</p>
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set <p>Sub-account Uin</p>
 * @method string getLoginUin() Obtain <p>Root account Uin</p>
 * @method void setLoginUin(string $LoginUin) Set <p>Root account Uin</p>
 * @method integer getOffset() Obtain <p>Offset (integer), used in conjunction with Limit, starts from 0</p>
 * @method void setOffset(integer $Offset) Set <p>Offset (integer), used in conjunction with Limit, starts from 0</p>
 * @method string getShareCode() Obtain <p>Required when Type=CONVERSATION_TYPE_SHARE. Share code</p>
 * @method void setShareCode(string $ShareCode) Set <p>Required when Type=CONVERSATION_TYPE_SHARE. Share code</p>
 * @method string getUserId() Obtain <p>Required when Type=CONVERSATION_TYPE_API. Visitor ID</p>
 * @method void setUserId(string $UserId) Set <p>Required when Type=CONVERSATION_TYPE_API. Visitor ID</p>
 * @method string getAgentId() Obtain <p>Client-side AgentId, used when querying sessions created based on the client-side AgentId</p>
 * @method void setAgentId(string $AgentId) Set <p>Client-side AgentId, used when querying sessions created based on the client-side AgentId</p>
 */
class DescribeConversationListRequest extends AbstractModel
{
    /**
     * @var integer <p>Session type. Pass CONVERSATION_TYPE_UNSPECIFIED to indicate all. Enumeration values: 0-CONVERSATION_TYPE_UNSPECIFIED (not specified; means all in list query), 1-CONVERSATION_TYPE_VISITOR (visitor trial), 2-CONVERSATION_TYPE_EVALUATION (evaluation), 5-CONVERSATION_TYPE_API (API integration), 10-CONVERSATION_TYPE_WORKFLOW (workflow debugging), 20-CONVERSATION_TYPE_SHARE (share a link)</p>
     */
    public $Type;

    /**
     * @var string <p>App ID</p>
     */
    public $AppId;

    /**
     * @var string <p>Required when Type=CONVERSATION_TYPE_API. Application key</p>
     */
    public $AppKey;

    /**
     * @var string <p>Keyword</p>
     */
    public $Keyword;

    /**
     * @var integer <p>Number limit (integer), used in conjunction with Offset</p>
     */
    public $Limit;

    /**
     * @var string <p>Sub-account Uin</p>
     */
    public $LoginSubAccountUin;

    /**
     * @var string <p>Root account Uin</p>
     */
    public $LoginUin;

    /**
     * @var integer <p>Offset (integer), used in conjunction with Limit, starts from 0</p>
     */
    public $Offset;

    /**
     * @var string <p>Required when Type=CONVERSATION_TYPE_SHARE. Share code</p>
     */
    public $ShareCode;

    /**
     * @var string <p>Required when Type=CONVERSATION_TYPE_API. Visitor ID</p>
     */
    public $UserId;

    /**
     * @var string <p>Client-side AgentId, used when querying sessions created based on the client-side AgentId</p>
     */
    public $AgentId;

    /**
     * @param integer $Type <p>Session type. Pass CONVERSATION_TYPE_UNSPECIFIED to indicate all. Enumeration values: 0-CONVERSATION_TYPE_UNSPECIFIED (not specified; means all in list query), 1-CONVERSATION_TYPE_VISITOR (visitor trial), 2-CONVERSATION_TYPE_EVALUATION (evaluation), 5-CONVERSATION_TYPE_API (API integration), 10-CONVERSATION_TYPE_WORKFLOW (workflow debugging), 20-CONVERSATION_TYPE_SHARE (share a link)</p>
     * @param string $AppId <p>App ID</p>
     * @param string $AppKey <p>Required when Type=CONVERSATION_TYPE_API. Application key</p>
     * @param string $Keyword <p>Keyword</p>
     * @param integer $Limit <p>Number limit (integer), used in conjunction with Offset</p>
     * @param string $LoginSubAccountUin <p>Sub-account Uin</p>
     * @param string $LoginUin <p>Root account Uin</p>
     * @param integer $Offset <p>Offset (integer), used in conjunction with Limit, starts from 0</p>
     * @param string $ShareCode <p>Required when Type=CONVERSATION_TYPE_SHARE. Share code</p>
     * @param string $UserId <p>Required when Type=CONVERSATION_TYPE_API. Visitor ID</p>
     * @param string $AgentId <p>Client-side AgentId, used when querying sessions created based on the client-side AgentId</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ShareCode",$param) and $param["ShareCode"] !== null) {
            $this->ShareCode = $param["ShareCode"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }
    }
}
