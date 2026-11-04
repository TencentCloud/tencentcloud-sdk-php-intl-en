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
 * DescribeConversationMessageList request structure.
 *
 * @method string getConversationId() Obtain <p>Session ID.</p>
 * @method void setConversationId(string $ConversationId) Set <p>Session ID.</p>
 * @method integer getType() Obtain <p>Session type enumeration values: 0-CONVERSATION_TYPE_UNSPECIFIED (unspecified; means all in list query), 1-CONVERSATION_TYPE_VISITOR (visitor trial), 2-CONVERSATION_TYPE_EVALUATION (evaluation), 5-CONVERSATION_TYPE_API (API integration), 10-CONVERSATION_TYPE_WORKFLOW (workflow debugging), 20-CONVERSATION_TYPE_SHARE (share link)</p>
 * @method void setType(integer $Type) Set <p>Session type enumeration values: 0-CONVERSATION_TYPE_UNSPECIFIED (unspecified; means all in list query), 1-CONVERSATION_TYPE_VISITOR (visitor trial), 2-CONVERSATION_TYPE_EVALUATION (evaluation), 5-CONVERSATION_TYPE_API (API integration), 10-CONVERSATION_TYPE_WORKFLOW (workflow debugging), 20-CONVERSATION_TYPE_SHARE (share link)</p>
 * @method string getAppKey() Obtain <p>Required when Type=CONVERSATION_TYPE_API. Application key</p>
 * @method void setAppKey(string $AppKey) Set <p>Required when Type=CONVERSATION_TYPE_API. Application key</p>
 * @method integer getLimit() Obtain <p>Total number of returned records. Default: 10. Maximum: 50. When querying forward or backward, messages of the record specified by record_id are excluded. When querying from the center in both directions, the message of the record specified by record_id is included. The number of returned records is limit / 2 for each direction, rounded up.</p>
 * @method void setLimit(integer $Limit) Set <p>Total number of returned records. Default: 10. Maximum: 50. When querying forward or backward, messages of the record specified by record_id are excluded. When querying from the center in both directions, the message of the record specified by record_id is included. The number of returned records is limit / 2 for each direction, rounded up.</p>
 * @method string getLoginSubAccountUin() Obtain <p>Sub-user Uin.</p>
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set <p>Sub-user Uin.</p>
 * @method string getLoginUin() Obtain <p>Root user Uin.</p>
 * @method void setLoginUin(string $LoginUin) Set <p>Root user Uin.</p>
 * @method string getRecordId() Obtain <p>Query anchor record ID</p>
 * @method void setRecordId(string $RecordId) Set <p>Query anchor record ID</p>
 * @method integer getRecordQueryDirection() Obtain <p>Query direction relative to record_id. Enumeration values: 0-RECORD_QUERY_DIRECTION_UNSPECIFIED (not specified, compatible with legacy logic, query forward by default), 1-RECORD_QUERY_DIRECTION_BACKWARD (query earlier messages forward from record_id), 2-RECORD_QUERY_DIRECTION_FORWARD (query newer messages backward from record_id), 3-RECORD_QUERY_DIRECTION_BIDIRECTIONAL (query both forward and backward from record_id as the center)</p>
 * @method void setRecordQueryDirection(integer $RecordQueryDirection) Set <p>Query direction relative to record_id. Enumeration values: 0-RECORD_QUERY_DIRECTION_UNSPECIFIED (not specified, compatible with legacy logic, query forward by default), 1-RECORD_QUERY_DIRECTION_BACKWARD (query earlier messages forward from record_id), 2-RECORD_QUERY_DIRECTION_FORWARD (query newer messages backward from record_id), 3-RECORD_QUERY_DIRECTION_BIDIRECTIONAL (query both forward and backward from record_id as the center)</p>
 * @method string getShareCode() Obtain <p>Required when Type is CONVERSATION_TYPE_SHARE. Share code</p>
 * @method void setShareCode(string $ShareCode) Set <p>Required when Type is CONVERSATION_TYPE_SHARE. Share code</p>
 * @method string getUserId() Obtain <p>Required when Type=CONVERSATION_TYPE_API. Visitor ID</p>
 * @method void setUserId(string $UserId) Set <p>Required when Type=CONVERSATION_TYPE_API. Visitor ID</p>
 */
class DescribeConversationMessageListRequest extends AbstractModel
{
    /**
     * @var string <p>Session ID.</p>
     */
    public $ConversationId;

    /**
     * @var integer <p>Session type enumeration values: 0-CONVERSATION_TYPE_UNSPECIFIED (unspecified; means all in list query), 1-CONVERSATION_TYPE_VISITOR (visitor trial), 2-CONVERSATION_TYPE_EVALUATION (evaluation), 5-CONVERSATION_TYPE_API (API integration), 10-CONVERSATION_TYPE_WORKFLOW (workflow debugging), 20-CONVERSATION_TYPE_SHARE (share link)</p>
     */
    public $Type;

    /**
     * @var string <p>Required when Type=CONVERSATION_TYPE_API. Application key</p>
     */
    public $AppKey;

    /**
     * @var integer <p>Total number of returned records. Default: 10. Maximum: 50. When querying forward or backward, messages of the record specified by record_id are excluded. When querying from the center in both directions, the message of the record specified by record_id is included. The number of returned records is limit / 2 for each direction, rounded up.</p>
     */
    public $Limit;

    /**
     * @var string <p>Sub-user Uin.</p>
     */
    public $LoginSubAccountUin;

    /**
     * @var string <p>Root user Uin.</p>
     */
    public $LoginUin;

    /**
     * @var string <p>Query anchor record ID</p>
     */
    public $RecordId;

    /**
     * @var integer <p>Query direction relative to record_id. Enumeration values: 0-RECORD_QUERY_DIRECTION_UNSPECIFIED (not specified, compatible with legacy logic, query forward by default), 1-RECORD_QUERY_DIRECTION_BACKWARD (query earlier messages forward from record_id), 2-RECORD_QUERY_DIRECTION_FORWARD (query newer messages backward from record_id), 3-RECORD_QUERY_DIRECTION_BIDIRECTIONAL (query both forward and backward from record_id as the center)</p>
     */
    public $RecordQueryDirection;

    /**
     * @var string <p>Required when Type is CONVERSATION_TYPE_SHARE. Share code</p>
     */
    public $ShareCode;

    /**
     * @var string <p>Required when Type=CONVERSATION_TYPE_API. Visitor ID</p>
     */
    public $UserId;

    /**
     * @param string $ConversationId <p>Session ID.</p>
     * @param integer $Type <p>Session type enumeration values: 0-CONVERSATION_TYPE_UNSPECIFIED (unspecified; means all in list query), 1-CONVERSATION_TYPE_VISITOR (visitor trial), 2-CONVERSATION_TYPE_EVALUATION (evaluation), 5-CONVERSATION_TYPE_API (API integration), 10-CONVERSATION_TYPE_WORKFLOW (workflow debugging), 20-CONVERSATION_TYPE_SHARE (share link)</p>
     * @param string $AppKey <p>Required when Type=CONVERSATION_TYPE_API. Application key</p>
     * @param integer $Limit <p>Total number of returned records. Default: 10. Maximum: 50. When querying forward or backward, messages of the record specified by record_id are excluded. When querying from the center in both directions, the message of the record specified by record_id is included. The number of returned records is limit / 2 for each direction, rounded up.</p>
     * @param string $LoginSubAccountUin <p>Sub-user Uin.</p>
     * @param string $LoginUin <p>Root user Uin.</p>
     * @param string $RecordId <p>Query anchor record ID</p>
     * @param integer $RecordQueryDirection <p>Query direction relative to record_id. Enumeration values: 0-RECORD_QUERY_DIRECTION_UNSPECIFIED (not specified, compatible with legacy logic, query forward by default), 1-RECORD_QUERY_DIRECTION_BACKWARD (query earlier messages forward from record_id), 2-RECORD_QUERY_DIRECTION_FORWARD (query newer messages backward from record_id), 3-RECORD_QUERY_DIRECTION_BIDIRECTIONAL (query both forward and backward from record_id as the center)</p>
     * @param string $ShareCode <p>Required when Type is CONVERSATION_TYPE_SHARE. Share code</p>
     * @param string $UserId <p>Required when Type=CONVERSATION_TYPE_API. Visitor ID</p>
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
        if (array_key_exists("ConversationId",$param) and $param["ConversationId"] !== null) {
            $this->ConversationId = $param["ConversationId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
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

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("RecordQueryDirection",$param) and $param["RecordQueryDirection"] !== null) {
            $this->RecordQueryDirection = $param["RecordQueryDirection"];
        }

        if (array_key_exists("ShareCode",$param) and $param["ShareCode"] !== null) {
            $this->ShareCode = $param["ShareCode"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
