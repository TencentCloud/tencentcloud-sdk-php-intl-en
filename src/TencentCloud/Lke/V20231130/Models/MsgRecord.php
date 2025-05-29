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
 * Message details.
 *
 * @method string getContent() Obtain Content.
 * @method void setContent(string $Content) Set Content.
 * @method string getSessionId() Obtain The Session ID corresponding to the current record.
 * @method void setSessionId(string $SessionId) Set The Session ID corresponding to the current record.
 * @method string getRecordId() Obtain Record ID.
 * @method void setRecordId(string $RecordId) Set Record ID.
 * @method string getRelatedRecordId() Obtain Associated record ID.
 * @method void setRelatedRecordId(string $RelatedRecordId) Set Associated record ID.
 * @method boolean getIsFromSelf() Obtain Whether it is from oneself.
 * @method void setIsFromSelf(boolean $IsFromSelf) Set Whether it is from oneself.
 * @method string getFromName() Obtain Sender name.
 * @method void setFromName(string $FromName) Set Sender name.
 * @method string getFromAvatar() Obtain Avatar of the sender.
 * @method void setFromAvatar(string $FromAvatar) Set Avatar of the sender.
 * @method string getTimestamp() Obtain Timestamp.
 * @method void setTimestamp(string $Timestamp) Set Timestamp.
 * @method boolean getHasRead() Obtain Whether it is read.
 * @method void setHasRead(boolean $HasRead) Set Whether it is read.
 * @method integer getScore() Obtain Evaluation.
 * @method void setScore(integer $Score) Set Evaluation.
 * @method boolean getCanRating() Obtain Whether to rate.
 * @method void setCanRating(boolean $CanRating) Set Whether to rate.
 * @method boolean getCanFeedback() Obtain Whether to display the feedback button.
 * @method void setCanFeedback(boolean $CanFeedback) Set Whether to display the feedback button.
 * @method integer getType() Obtain Record type.
 * @method void setType(integer $Type) Set Record type.
 * @method array getReferences() Obtain Reference source.
 * @method void setReferences(array $References) Set Reference source.
 * @method array getReasons() Obtain Reason for evaluation.
 * @method void setReasons(array $Reasons) Set Reason for evaluation.
 * @method boolean getIsLlmGenerated() Obtain Whether it is a large model.
 * @method void setIsLlmGenerated(boolean $IsLlmGenerated) Set Whether it is a large model.
 * @method array getImageUrls() Obtain Image URL, which can be public read.
 * @method void setImageUrls(array $ImageUrls) Set Image URL, which can be public read.
 * @method TokenStat getTokenStat() Obtain Statistical information of the current token.
 * @method void setTokenStat(TokenStat $TokenStat) Set Statistical information of the current token.
 * @method integer getReplyMethod() Obtain Response method.
1: Large model directly replies.
2: Conservative reply, reply to unknown questions.
3: Reply to rejected question.
4: Sensitive response.
5: Directly reply to Q&A pairs. Priority will be given to answering the adopted Q&A pairs.
6: Reply with welcome words.
7: Reply for concurrency limit exceeded.
8: Global intervention knowledge.
9: Reply during the task flow process. When task_flow.type = 0 in history, it is a response from the large model.
10: Reply with task flow answer.
11: Reply from the search engine.
12: Reply after knowledge polishing.
13: Reply with image understanding.
14: Reply based on real-time document.
 * @method void setReplyMethod(integer $ReplyMethod) Set Response method.
1: Large model directly replies.
2: Conservative reply, reply to unknown questions.
3: Reply to rejected question.
4: Sensitive response.
5: Directly reply to Q&A pairs. Priority will be given to answering the adopted Q&A pairs.
6: Reply with welcome words.
7: Reply for concurrency limit exceeded.
8: Global intervention knowledge.
9: Reply during the task flow process. When task_flow.type = 0 in history, it is a response from the large model.
10: Reply with task flow answer.
11: Reply from the search engine.
12: Reply after knowledge polishing.
13: Reply with image understanding.
14: Reply based on real-time document.
 * @method array getOptionCards() Obtain Option tab, used for multi-round dialogue.
 * @method void setOptionCards(array $OptionCards) Set Option tab, used for multi-round dialogue.
 * @method TaskFlowInfo getTaskFlow() Obtain Task information.
 * @method void setTaskFlow(TaskFlowInfo $TaskFlow) Set Task information.
 * @method array getFileInfos() Obtain File information passed in by the user.
 * @method void setFileInfos(array $FileInfos) Set File information passed in by the user.
 * @method array getQuoteInfos() Obtain Location information of reference source .
 * @method void setQuoteInfos(array $QuoteInfos) Set Location information of reference source .
 * @method AgentThought getAgentThought() Obtain Information on the thinking process of the agent.
 * @method void setAgentThought(AgentThought $AgentThought) Set Information on the thinking process of the agent.
 * @method ExtraInfo getExtraInfo() Obtain Expanded information.
 * @method void setExtraInfo(ExtraInfo $ExtraInfo) Set Expanded information.
 * @method WorkflowInfo getWorkFlow() Obtain Workflow information.
 * @method void setWorkFlow(WorkflowInfo $WorkFlow) Set Workflow information.
 */
class MsgRecord extends AbstractModel
{
    /**
     * @var string Content.
     */
    public $Content;

    /**
     * @var string The Session ID corresponding to the current record.
     */
    public $SessionId;

    /**
     * @var string Record ID.
     */
    public $RecordId;

    /**
     * @var string Associated record ID.
     */
    public $RelatedRecordId;

    /**
     * @var boolean Whether it is from oneself.
     */
    public $IsFromSelf;

    /**
     * @var string Sender name.
     */
    public $FromName;

    /**
     * @var string Avatar of the sender.
     */
    public $FromAvatar;

    /**
     * @var string Timestamp.
     */
    public $Timestamp;

    /**
     * @var boolean Whether it is read.
     */
    public $HasRead;

    /**
     * @var integer Evaluation.
     */
    public $Score;

    /**
     * @var boolean Whether to rate.
     */
    public $CanRating;

    /**
     * @var boolean Whether to display the feedback button.
     */
    public $CanFeedback;

    /**
     * @var integer Record type.
     */
    public $Type;

    /**
     * @var array Reference source.
     */
    public $References;

    /**
     * @var array Reason for evaluation.
     */
    public $Reasons;

    /**
     * @var boolean Whether it is a large model.
     */
    public $IsLlmGenerated;

    /**
     * @var array Image URL, which can be public read.
     */
    public $ImageUrls;

    /**
     * @var TokenStat Statistical information of the current token.
     */
    public $TokenStat;

    /**
     * @var integer Response method.
1: Large model directly replies.
2: Conservative reply, reply to unknown questions.
3: Reply to rejected question.
4: Sensitive response.
5: Directly reply to Q&A pairs. Priority will be given to answering the adopted Q&A pairs.
6: Reply with welcome words.
7: Reply for concurrency limit exceeded.
8: Global intervention knowledge.
9: Reply during the task flow process. When task_flow.type = 0 in history, it is a response from the large model.
10: Reply with task flow answer.
11: Reply from the search engine.
12: Reply after knowledge polishing.
13: Reply with image understanding.
14: Reply based on real-time document.
     */
    public $ReplyMethod;

    /**
     * @var array Option tab, used for multi-round dialogue.
     */
    public $OptionCards;

    /**
     * @var TaskFlowInfo Task information.
     */
    public $TaskFlow;

    /**
     * @var array File information passed in by the user.
     */
    public $FileInfos;

    /**
     * @var array Location information of reference source .
     */
    public $QuoteInfos;

    /**
     * @var AgentThought Information on the thinking process of the agent.
     */
    public $AgentThought;

    /**
     * @var ExtraInfo Expanded information.
     */
    public $ExtraInfo;

    /**
     * @var WorkflowInfo Workflow information.
     */
    public $WorkFlow;

    /**
     * @param string $Content Content.
     * @param string $SessionId The Session ID corresponding to the current record.
     * @param string $RecordId Record ID.
     * @param string $RelatedRecordId Associated record ID.
     * @param boolean $IsFromSelf Whether it is from oneself.
     * @param string $FromName Sender name.
     * @param string $FromAvatar Avatar of the sender.
     * @param string $Timestamp Timestamp.
     * @param boolean $HasRead Whether it is read.
     * @param integer $Score Evaluation.
     * @param boolean $CanRating Whether to rate.
     * @param boolean $CanFeedback Whether to display the feedback button.
     * @param integer $Type Record type.
     * @param array $References Reference source.
     * @param array $Reasons Reason for evaluation.
     * @param boolean $IsLlmGenerated Whether it is a large model.
     * @param array $ImageUrls Image URL, which can be public read.
     * @param TokenStat $TokenStat Statistical information of the current token.
     * @param integer $ReplyMethod Response method.
1: Large model directly replies.
2: Conservative reply, reply to unknown questions.
3: Reply to rejected question.
4: Sensitive response.
5: Directly reply to Q&A pairs. Priority will be given to answering the adopted Q&A pairs.
6: Reply with welcome words.
7: Reply for concurrency limit exceeded.
8: Global intervention knowledge.
9: Reply during the task flow process. When task_flow.type = 0 in history, it is a response from the large model.
10: Reply with task flow answer.
11: Reply from the search engine.
12: Reply after knowledge polishing.
13: Reply with image understanding.
14: Reply based on real-time document.
     * @param array $OptionCards Option tab, used for multi-round dialogue.
     * @param TaskFlowInfo $TaskFlow Task information.
     * @param array $FileInfos File information passed in by the user.
     * @param array $QuoteInfos Location information of reference source .
     * @param AgentThought $AgentThought Information on the thinking process of the agent.
     * @param ExtraInfo $ExtraInfo Expanded information.
     * @param WorkflowInfo $WorkFlow Workflow information.
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("RelatedRecordId",$param) and $param["RelatedRecordId"] !== null) {
            $this->RelatedRecordId = $param["RelatedRecordId"];
        }

        if (array_key_exists("IsFromSelf",$param) and $param["IsFromSelf"] !== null) {
            $this->IsFromSelf = $param["IsFromSelf"];
        }

        if (array_key_exists("FromName",$param) and $param["FromName"] !== null) {
            $this->FromName = $param["FromName"];
        }

        if (array_key_exists("FromAvatar",$param) and $param["FromAvatar"] !== null) {
            $this->FromAvatar = $param["FromAvatar"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("HasRead",$param) and $param["HasRead"] !== null) {
            $this->HasRead = $param["HasRead"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("CanRating",$param) and $param["CanRating"] !== null) {
            $this->CanRating = $param["CanRating"];
        }

        if (array_key_exists("CanFeedback",$param) and $param["CanFeedback"] !== null) {
            $this->CanFeedback = $param["CanFeedback"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new MsgRecordReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }

        if (array_key_exists("Reasons",$param) and $param["Reasons"] !== null) {
            $this->Reasons = $param["Reasons"];
        }

        if (array_key_exists("IsLlmGenerated",$param) and $param["IsLlmGenerated"] !== null) {
            $this->IsLlmGenerated = $param["IsLlmGenerated"];
        }

        if (array_key_exists("ImageUrls",$param) and $param["ImageUrls"] !== null) {
            $this->ImageUrls = $param["ImageUrls"];
        }

        if (array_key_exists("TokenStat",$param) and $param["TokenStat"] !== null) {
            $this->TokenStat = new TokenStat();
            $this->TokenStat->deserialize($param["TokenStat"]);
        }

        if (array_key_exists("ReplyMethod",$param) and $param["ReplyMethod"] !== null) {
            $this->ReplyMethod = $param["ReplyMethod"];
        }

        if (array_key_exists("OptionCards",$param) and $param["OptionCards"] !== null) {
            $this->OptionCards = $param["OptionCards"];
        }

        if (array_key_exists("TaskFlow",$param) and $param["TaskFlow"] !== null) {
            $this->TaskFlow = new TaskFlowInfo();
            $this->TaskFlow->deserialize($param["TaskFlow"]);
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new FileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("QuoteInfos",$param) and $param["QuoteInfos"] !== null) {
            $this->QuoteInfos = [];
            foreach ($param["QuoteInfos"] as $key => $value){
                $obj = new QuoteInfo();
                $obj->deserialize($value);
                array_push($this->QuoteInfos, $obj);
            }
        }

        if (array_key_exists("AgentThought",$param) and $param["AgentThought"] !== null) {
            $this->AgentThought = new AgentThought();
            $this->AgentThought->deserialize($param["AgentThought"]);
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = new ExtraInfo();
            $this->ExtraInfo->deserialize($param["ExtraInfo"]);
        }

        if (array_key_exists("WorkFlow",$param) and $param["WorkFlow"] !== null) {
            $this->WorkFlow = new WorkflowInfo();
            $this->WorkFlow->deserialize($param["WorkFlow"]);
        }
    }
}
