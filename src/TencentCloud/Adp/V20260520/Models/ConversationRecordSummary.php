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
 * Statistical information of a single dialogue history
 *
 * @method string getRecordId() Obtain <p>Reply record ID, corresponding to the record_id of the reply message in messages</p>
 * @method void setRecordId(string $RecordId) Set <p>Reply record ID, corresponding to the record_id of the reply message in messages</p>
 * @method string getRelatedRecordId() Obtain <p>ID of the user's question record, corresponding to the record_id of the user message in messages</p>
 * @method void setRelatedRecordId(string $RelatedRecordId) Set <p>ID of the user's question record, corresponding to the record_id of the user message in messages</p>
 * @method ConversationRecordTimeUsage getTimeUsage() Obtain <p>Duration info of a single dialogue</p>
 * @method void setTimeUsage(ConversationRecordTimeUsage $TimeUsage) Set <p>Duration info of a single dialogue</p>
 * @method ConversationRecordTokenUsage getTokenUsage() Obtain <p>token consumption information of a single dialogue</p>
 * @method void setTokenUsage(ConversationRecordTokenUsage $TokenUsage) Set <p>token consumption information of a single dialogue</p>
 * @method ConversationRecordErrorInfo getErrorInfo() Obtain <p>Description of a single dialogue failure; empty if successful</p>
 * @method void setErrorInfo(ConversationRecordErrorInfo $ErrorInfo) Set <p>Description of a single dialogue failure; empty if successful</p>
 * @method string getStatus() Obtain <p>Status of a single employee assistant dialogue.</p><p>Enumeration values: </p><ul><li>pending: Pending, </li><li>processing: Processing, </li><li>success: Success, </li><li>failed: Failure, </li><li>stop: Stopped.</li></ul>
 * @method void setStatus(string $Status) Set <p>Status of a single employee assistant dialogue.</p><p>Enumeration values: </p><ul><li>pending: Pending, </li><li>processing: Processing, </li><li>success: Success, </li><li>failed: Failure, </li><li>stop: Stopped.</li></ul>
 */
class ConversationRecordSummary extends AbstractModel
{
    /**
     * @var string <p>Reply record ID, corresponding to the record_id of the reply message in messages</p>
     */
    public $RecordId;

    /**
     * @var string <p>ID of the user's question record, corresponding to the record_id of the user message in messages</p>
     */
    public $RelatedRecordId;

    /**
     * @var ConversationRecordTimeUsage <p>Duration info of a single dialogue</p>
     */
    public $TimeUsage;

    /**
     * @var ConversationRecordTokenUsage <p>token consumption information of a single dialogue</p>
     */
    public $TokenUsage;

    /**
     * @var ConversationRecordErrorInfo <p>Description of a single dialogue failure; empty if successful</p>
     */
    public $ErrorInfo;

    /**
     * @var string <p>Status of a single employee assistant dialogue.</p><p>Enumeration values: </p><ul><li>pending: Pending, </li><li>processing: Processing, </li><li>success: Success, </li><li>failed: Failure, </li><li>stop: Stopped.</li></ul>
     */
    public $Status;

    /**
     * @param string $RecordId <p>Reply record ID, corresponding to the record_id of the reply message in messages</p>
     * @param string $RelatedRecordId <p>ID of the user's question record, corresponding to the record_id of the user message in messages</p>
     * @param ConversationRecordTimeUsage $TimeUsage <p>Duration info of a single dialogue</p>
     * @param ConversationRecordTokenUsage $TokenUsage <p>token consumption information of a single dialogue</p>
     * @param ConversationRecordErrorInfo $ErrorInfo <p>Description of a single dialogue failure; empty if successful</p>
     * @param string $Status <p>Status of a single employee assistant dialogue.</p><p>Enumeration values: </p><ul><li>pending: Pending, </li><li>processing: Processing, </li><li>success: Success, </li><li>failed: Failure, </li><li>stop: Stopped.</li></ul>
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
        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("RelatedRecordId",$param) and $param["RelatedRecordId"] !== null) {
            $this->RelatedRecordId = $param["RelatedRecordId"];
        }

        if (array_key_exists("TimeUsage",$param) and $param["TimeUsage"] !== null) {
            $this->TimeUsage = new ConversationRecordTimeUsage();
            $this->TimeUsage->deserialize($param["TimeUsage"]);
        }

        if (array_key_exists("TokenUsage",$param) and $param["TokenUsage"] !== null) {
            $this->TokenUsage = new ConversationRecordTokenUsage();
            $this->TokenUsage->deserialize($param["TokenUsage"]);
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = new ConversationRecordErrorInfo();
            $this->ErrorInfo->deserialize($param["ErrorInfo"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
