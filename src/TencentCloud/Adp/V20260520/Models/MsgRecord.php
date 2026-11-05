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
 * MsgRecord
 *
 * @method string getAnswer() Obtain Answer.
 * @method void setAnswer(string $Answer) Set Answer.
 * @method string getAppId() Obtain Application ID
 * @method void setAppId(string $AppId) Set Application ID
 * @method string getCategoryId() Obtain Category ID
 * @method void setCategoryId(string $CategoryId) Set Category ID
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getIntent() Obtain Intent.
 * @method void setIntent(string $Intent) Set Intent.
 * @method string getIntentCategory() Obtain Intent category
 * @method void setIntentCategory(string $IntentCategory) Set Intent category
 * @method boolean getIsSmart() Obtain Whether it is intelligent categorization
 * @method void setIsSmart(boolean $IsSmart) Set Whether it is intelligent categorization
 * @method string getQuestion() Obtain Issue
 * @method void setQuestion(string $Question) Set Issue
 * @method string getRecordId() Obtain Record ID
 * @method void setRecordId(string $RecordId) Set Record ID
 * @method integer getReplyMethod() Obtain method. Enumerates ReplyMethod: 0=not specified, 1=direct reply by large model, 2=conservative reply, 3=refuse to answer, 4=sensitive reply, 5=Q&A pair prioritized reply, 6=welcome message, 7=concurrency limit exceeded, 8=global intervention knowledge, 9=task flow process reply, 10=task flow answer, 11=search engine, 12=knowledge polish, 13=image understanding, 14=real-time document, 15=clarification confirmation, 16=workflow reply, 17=workflow completion, 18=Intelligent Agent reply, 19=multiple intents, 20=interruption, 21=Intelligent Agent plan preview, 22=Intelligent Agent plan result, 23=Intelligent Agent structured output.
 * @method void setReplyMethod(integer $ReplyMethod) Set method. Enumerates ReplyMethod: 0=not specified, 1=direct reply by large model, 2=conservative reply, 3=refuse to answer, 4=sensitive reply, 5=Q&A pair prioritized reply, 6=welcome message, 7=concurrency limit exceeded, 8=global intervention knowledge, 9=task flow process reply, 10=task flow answer, 11=search engine, 12=knowledge polish, 13=image understanding, 14=real-time document, 15=clarification confirmation, 16=workflow reply, 17=workflow completion, 18=Intelligent Agent reply, 19=multiple intents, 20=interruption, 21=Intelligent Agent plan preview, 22=Intelligent Agent plan result, 23=Intelligent Agent structured output.
 * @method MsgRecordResult getResult() Obtain Returned result
 * @method void setResult(MsgRecordResult $Result) Set Returned result
 * @method integer getScore() Obtain Score
 * @method void setScore(integer $Score) Set Score
 * @method string getSessionId() Obtain Session ID
 * @method void setSessionId(string $SessionId) Set Session ID
 * @method MsgRecordSource getSource() Obtain Source.
 * @method void setSource(MsgRecordSource $Source) Set Source.
 * @method string getTraceId() Obtain trace_id
 * @method void setTraceId(string $TraceId) Set trace_id
 */
class MsgRecord extends AbstractModel
{
    /**
     * @var string Answer.
     */
    public $Answer;

    /**
     * @var string Application ID
     */
    public $AppId;

    /**
     * @var string Category ID
     */
    public $CategoryId;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Intent.
     */
    public $Intent;

    /**
     * @var string Intent category
     */
    public $IntentCategory;

    /**
     * @var boolean Whether it is intelligent categorization
     */
    public $IsSmart;

    /**
     * @var string Issue
     */
    public $Question;

    /**
     * @var string Record ID
     */
    public $RecordId;

    /**
     * @var integer method. Enumerates ReplyMethod: 0=not specified, 1=direct reply by large model, 2=conservative reply, 3=refuse to answer, 4=sensitive reply, 5=Q&A pair prioritized reply, 6=welcome message, 7=concurrency limit exceeded, 8=global intervention knowledge, 9=task flow process reply, 10=task flow answer, 11=search engine, 12=knowledge polish, 13=image understanding, 14=real-time document, 15=clarification confirmation, 16=workflow reply, 17=workflow completion, 18=Intelligent Agent reply, 19=multiple intents, 20=interruption, 21=Intelligent Agent plan preview, 22=Intelligent Agent plan result, 23=Intelligent Agent structured output.
     */
    public $ReplyMethod;

    /**
     * @var MsgRecordResult Returned result
     */
    public $Result;

    /**
     * @var integer Score
     */
    public $Score;

    /**
     * @var string Session ID
     */
    public $SessionId;

    /**
     * @var MsgRecordSource Source.
     */
    public $Source;

    /**
     * @var string trace_id
     */
    public $TraceId;

    /**
     * @param string $Answer Answer.
     * @param string $AppId Application ID
     * @param string $CategoryId Category ID
     * @param string $CreateTime Creation time.
     * @param string $Intent Intent.
     * @param string $IntentCategory Intent category
     * @param boolean $IsSmart Whether it is intelligent categorization
     * @param string $Question Issue
     * @param string $RecordId Record ID
     * @param integer $ReplyMethod method. Enumerates ReplyMethod: 0=not specified, 1=direct reply by large model, 2=conservative reply, 3=refuse to answer, 4=sensitive reply, 5=Q&A pair prioritized reply, 6=welcome message, 7=concurrency limit exceeded, 8=global intervention knowledge, 9=task flow process reply, 10=task flow answer, 11=search engine, 12=knowledge polish, 13=image understanding, 14=real-time document, 15=clarification confirmation, 16=workflow reply, 17=workflow completion, 18=Intelligent Agent reply, 19=multiple intents, 20=interruption, 21=Intelligent Agent plan preview, 22=Intelligent Agent plan result, 23=Intelligent Agent structured output.
     * @param MsgRecordResult $Result Returned result
     * @param integer $Score Score
     * @param string $SessionId Session ID
     * @param MsgRecordSource $Source Source.
     * @param string $TraceId trace_id
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
        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Intent",$param) and $param["Intent"] !== null) {
            $this->Intent = $param["Intent"];
        }

        if (array_key_exists("IntentCategory",$param) and $param["IntentCategory"] !== null) {
            $this->IntentCategory = $param["IntentCategory"];
        }

        if (array_key_exists("IsSmart",$param) and $param["IsSmart"] !== null) {
            $this->IsSmart = $param["IsSmart"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("ReplyMethod",$param) and $param["ReplyMethod"] !== null) {
            $this->ReplyMethod = $param["ReplyMethod"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new MsgRecordResult();
            $this->Result->deserialize($param["Result"]);
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = new MsgRecordSource();
            $this->Source->deserialize($param["Source"]);
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }
    }
}
