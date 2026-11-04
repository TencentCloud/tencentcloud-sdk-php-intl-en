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
 * ModifyConversation request structure.
 *
 * @method integer getType() Obtain <p>Session type. Enumeration values: 0-CONVERSATION_TYPE_UNSPECIFIED (not specified; means all in list query), 1-CONVERSATION_TYPE_VISITOR (visitor trial), 2-CONVERSATION_TYPE_EVALUATION (evaluation), 5-CONVERSATION_TYPE_API (API integration), 10-CONVERSATION_TYPE_WORKFLOW (workflow debugging), 20-CONVERSATION_TYPE_SHARE (share a link)</p>
 * @method void setType(integer $Type) Set <p>Session type. Enumeration values: 0-CONVERSATION_TYPE_UNSPECIFIED (not specified; means all in list query), 1-CONVERSATION_TYPE_VISITOR (visitor trial), 2-CONVERSATION_TYPE_EVALUATION (evaluation), 5-CONVERSATION_TYPE_API (API integration), 10-CONVERSATION_TYPE_WORKFLOW (workflow debugging), 20-CONVERSATION_TYPE_SHARE (share a link)</p>
 * @method string getAppId() Obtain <p>App ID</p>
 * @method void setAppId(string $AppId) Set <p>App ID</p>
 * @method string getAppKey() Obtain <p>Required when Type=CONVERSATION_TYPE_API. Application key</p>
 * @method void setAppKey(string $AppKey) Set <p>Required when Type=CONVERSATION_TYPE_API. Application key</p>
 * @method string getLoginSubAccountUin() Obtain <p>User sub-account logged in (required in integrator mode)</p>
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set <p>User sub-account logged in (required in integrator mode)</p>
 * @method string getLoginUin() Obtain <p>User Main Account logged in (required in integrator mode)</p>
 * @method void setLoginUin(string $LoginUin) Set <p>User Main Account logged in (required in integrator mode)</p>
 * @method string getShareCode() Obtain <p>Required when Type is CONVERSATION_TYPE_SHARE. Share code</p>
 * @method void setShareCode(string $ShareCode) Set <p>Required when Type is CONVERSATION_TYPE_SHARE. Share code</p>
 * @method string getUserId() Obtain <p>Required when Type=CONVERSATION_TYPE_API. Visitor ID</p>
 * @method void setUserId(string $UserId) Set <p>Required when Type=CONVERSATION_TYPE_API. Visitor ID</p>
 * @method string getConversationId() Obtain Session ID.
 * @method void setConversationId(string $ConversationId) Set Session ID.
 * @method string getTitle() Obtain Session heading
 * @method void setTitle(string $Title) Set Session heading
 */
class ModifyConversationRequest extends AbstractModel
{
    /**
     * @var integer <p>Session type. Enumeration values: 0-CONVERSATION_TYPE_UNSPECIFIED (not specified; means all in list query), 1-CONVERSATION_TYPE_VISITOR (visitor trial), 2-CONVERSATION_TYPE_EVALUATION (evaluation), 5-CONVERSATION_TYPE_API (API integration), 10-CONVERSATION_TYPE_WORKFLOW (workflow debugging), 20-CONVERSATION_TYPE_SHARE (share a link)</p>
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
     * @var string <p>User sub-account logged in (required in integrator mode)</p>
     */
    public $LoginSubAccountUin;

    /**
     * @var string <p>User Main Account logged in (required in integrator mode)</p>
     */
    public $LoginUin;

    /**
     * @var string <p>Required when Type is CONVERSATION_TYPE_SHARE. Share code</p>
     */
    public $ShareCode;

    /**
     * @var string <p>Required when Type=CONVERSATION_TYPE_API. Visitor ID</p>
     */
    public $UserId;

    /**
     * @var string Session ID.
     */
    public $ConversationId;

    /**
     * @var string Session heading
     */
    public $Title;

    /**
     * @param integer $Type <p>Session type. Enumeration values: 0-CONVERSATION_TYPE_UNSPECIFIED (not specified; means all in list query), 1-CONVERSATION_TYPE_VISITOR (visitor trial), 2-CONVERSATION_TYPE_EVALUATION (evaluation), 5-CONVERSATION_TYPE_API (API integration), 10-CONVERSATION_TYPE_WORKFLOW (workflow debugging), 20-CONVERSATION_TYPE_SHARE (share a link)</p>
     * @param string $AppId <p>App ID</p>
     * @param string $AppKey <p>Required when Type=CONVERSATION_TYPE_API. Application key</p>
     * @param string $LoginSubAccountUin <p>User sub-account logged in (required in integrator mode)</p>
     * @param string $LoginUin <p>User Main Account logged in (required in integrator mode)</p>
     * @param string $ShareCode <p>Required when Type is CONVERSATION_TYPE_SHARE. Share code</p>
     * @param string $UserId <p>Required when Type=CONVERSATION_TYPE_API. Visitor ID</p>
     * @param string $ConversationId Session ID.
     * @param string $Title Session heading
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

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("ShareCode",$param) and $param["ShareCode"] !== null) {
            $this->ShareCode = $param["ShareCode"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("ConversationId",$param) and $param["ConversationId"] !== null) {
            $this->ConversationId = $param["ConversationId"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }
    }
}
