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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextModeration response structure.
 *
 * @method string getBizType() Obtain This field returns the BizType of the request parameters
 * @method void setBizType(string $BizType) Set This field returns the BizType of the request parameters
 * @method string getLabel() Obtain This field returns the **negative label with the highest priority** in the moderation results (DetailResults), which indicates the moderation result recommended by the model. It is recommended that you handle different violations with the suggested values according to your business needs. <br>Returned values: **Normal**: normal content; **Porn**: pornographic content; **Abuse**: abusive content; **Ad**: advertising content; **Custom**: custom violating content, and others such as objectionable, insecure or inappropriate content.
 * @method void setLabel(string $Label) Set This field returns the **negative label with the highest priority** in the moderation results (DetailResults), which indicates the moderation result recommended by the model. It is recommended that you handle different violations with the suggested values according to your business needs. <br>Returned values: **Normal**: normal content; **Porn**: pornographic content; **Abuse**: abusive content; **Ad**: advertising content; **Custom**: custom violating content, and others such as objectionable, insecure or inappropriate content.
 * @method string getSuggestion() Obtain This field returns the follow-up moderation suggestions. The returned value indicates the recommended operation after obtaining the moderation result. It is recommended that you handle different violations with the suggested values according to your business needs. <br>Returned values: **Block**: block; **Review**: human moderation; **Pass**: pass
 * @method void setSuggestion(string $Suggestion) Set This field returns the follow-up moderation suggestions. The returned value indicates the recommended operation after obtaining the moderation result. It is recommended that you handle different violations with the suggested values according to your business needs. <br>Returned values: **Block**: block; **Review**: human moderation; **Pass**: pass
 * @method array getKeywords() Obtain This field returns the keywords matched with the libraries in the moderated text under the current label to mark the specific violations (for example, *Friend me*). This parameter may have multiple returned values, indicating multiple keywords are matched. If the returned value is empty and the `Score` is not empty, it means that the negative label corresponding to the moderation result is a value returned from the semantic model judgment
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setKeywords(array $Keywords) Set This field returns the keywords matched with the libraries in the moderated text under the current label to mark the specific violations (for example, *Friend me*). This parameter may have multiple returned values, indicating multiple keywords are matched. If the returned value is empty and the `Score` is not empty, it means that the negative label corresponding to the moderation result is a value returned from the semantic model judgment
Note: This field may return `null`, indicating that no valid value can be found.
 * @method integer getScore() Obtain This field returns the confidence level under the current label. Value range: 0 (**the lowest confidence level**) - 100 (**the highest confidence level**). The higher the value, the more likely the text is to belong to the category indicated by the current label. For example, *pornographic 99* indicates that the text is very likely to be pornographic, and *pornographic 0* indicates that the text is not pornographic
 * @method void setScore(integer $Score) Set This field returns the confidence level under the current label. Value range: 0 (**the lowest confidence level**) - 100 (**the highest confidence level**). The higher the value, the more likely the text is to belong to the category indicated by the current label. For example, *pornographic 99* indicates that the text is very likely to be pornographic, and *pornographic 0* indicates that the text is not pornographic
 * @method array getDetailResults() Obtain This field returns the moderation results based on the text libraries. For details, see `DetailResults` in the data structure
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setDetailResults(array $DetailResults) Set This field returns the moderation results based on the text libraries. For details, see `DetailResults` in the data structure
Note: This field may return `null`, indicating that no valid value can be found.
 * @method array getRiskDetails() Obtain This field returns the detection results of violating accounts at risk, mainly including violation categories and risk levels. For details, see `RiskDetails` in the data structure
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setRiskDetails(array $RiskDetails) Set This field returns the detection results of violating accounts at risk, mainly including violation categories and risk levels. For details, see `RiskDetails` in the data structure
Note: This field may return `null`, indicating that no valid value can be found.
 * @method string getExtra() Obtain This field returns the extra information configured according to your needs. If it's not configured, the returned value is empty by default. <br>Note: the returned information varies based on different customers or Biztypes. If you need to configure this field, please submit a ticket or contact after-sales manager
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setExtra(string $Extra) Set This field returns the extra information configured according to your needs. If it's not configured, the returned value is empty by default. <br>Note: the returned information varies based on different customers or Biztypes. If you need to configure this field, please submit a ticket or contact after-sales manager
Note: This field may return `null`, indicating that no valid value can be found.
 * @method string getDataId() Obtain This field returns the `DataId` in the request parameter corresponding to the moderated object
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setDataId(string $DataId) Set This field returns the `DataId` in the request parameter corresponding to the moderated object
Note: This field may return `null`, indicating that no valid value can be found.
 * @method string getSubLabel() Obtain The field returns the second-level labels under the current label.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setSubLabel(string $SubLabel) Set The field returns the second-level labels under the current label.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method string getContextText() Obtain Returns the context text.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContextText(string $ContextText) Set Returns the context text.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SentimentAnalysis getSentimentAnalysis() Obtain 
 * @method void setSentimentAnalysis(SentimentAnalysis $SentimentAnalysis) Set 
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class TextModerationResponse extends AbstractModel
{
    /**
     * @var string This field returns the BizType of the request parameters
     */
    public $BizType;

    /**
     * @var string This field returns the **negative label with the highest priority** in the moderation results (DetailResults), which indicates the moderation result recommended by the model. It is recommended that you handle different violations with the suggested values according to your business needs. <br>Returned values: **Normal**: normal content; **Porn**: pornographic content; **Abuse**: abusive content; **Ad**: advertising content; **Custom**: custom violating content, and others such as objectionable, insecure or inappropriate content.
     */
    public $Label;

    /**
     * @var string This field returns the follow-up moderation suggestions. The returned value indicates the recommended operation after obtaining the moderation result. It is recommended that you handle different violations with the suggested values according to your business needs. <br>Returned values: **Block**: block; **Review**: human moderation; **Pass**: pass
     */
    public $Suggestion;

    /**
     * @var array This field returns the keywords matched with the libraries in the moderated text under the current label to mark the specific violations (for example, *Friend me*). This parameter may have multiple returned values, indicating multiple keywords are matched. If the returned value is empty and the `Score` is not empty, it means that the negative label corresponding to the moderation result is a value returned from the semantic model judgment
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $Keywords;

    /**
     * @var integer This field returns the confidence level under the current label. Value range: 0 (**the lowest confidence level**) - 100 (**the highest confidence level**). The higher the value, the more likely the text is to belong to the category indicated by the current label. For example, *pornographic 99* indicates that the text is very likely to be pornographic, and *pornographic 0* indicates that the text is not pornographic
     */
    public $Score;

    /**
     * @var array This field returns the moderation results based on the text libraries. For details, see `DetailResults` in the data structure
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $DetailResults;

    /**
     * @var array This field returns the detection results of violating accounts at risk, mainly including violation categories and risk levels. For details, see `RiskDetails` in the data structure
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $RiskDetails;

    /**
     * @var string This field returns the extra information configured according to your needs. If it's not configured, the returned value is empty by default. <br>Note: the returned information varies based on different customers or Biztypes. If you need to configure this field, please submit a ticket or contact after-sales manager
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $Extra;

    /**
     * @var string This field returns the `DataId` in the request parameter corresponding to the moderated object
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $DataId;

    /**
     * @var string The field returns the second-level labels under the current label.
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $SubLabel;

    /**
     * @var string Returns the context text.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContextText;

    /**
     * @var SentimentAnalysis 
     */
    public $SentimentAnalysis;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $BizType This field returns the BizType of the request parameters
     * @param string $Label This field returns the **negative label with the highest priority** in the moderation results (DetailResults), which indicates the moderation result recommended by the model. It is recommended that you handle different violations with the suggested values according to your business needs. <br>Returned values: **Normal**: normal content; **Porn**: pornographic content; **Abuse**: abusive content; **Ad**: advertising content; **Custom**: custom violating content, and others such as objectionable, insecure or inappropriate content.
     * @param string $Suggestion This field returns the follow-up moderation suggestions. The returned value indicates the recommended operation after obtaining the moderation result. It is recommended that you handle different violations with the suggested values according to your business needs. <br>Returned values: **Block**: block; **Review**: human moderation; **Pass**: pass
     * @param array $Keywords This field returns the keywords matched with the libraries in the moderated text under the current label to mark the specific violations (for example, *Friend me*). This parameter may have multiple returned values, indicating multiple keywords are matched. If the returned value is empty and the `Score` is not empty, it means that the negative label corresponding to the moderation result is a value returned from the semantic model judgment
Note: This field may return `null`, indicating that no valid value can be found.
     * @param integer $Score This field returns the confidence level under the current label. Value range: 0 (**the lowest confidence level**) - 100 (**the highest confidence level**). The higher the value, the more likely the text is to belong to the category indicated by the current label. For example, *pornographic 99* indicates that the text is very likely to be pornographic, and *pornographic 0* indicates that the text is not pornographic
     * @param array $DetailResults This field returns the moderation results based on the text libraries. For details, see `DetailResults` in the data structure
Note: This field may return `null`, indicating that no valid value can be found.
     * @param array $RiskDetails This field returns the detection results of violating accounts at risk, mainly including violation categories and risk levels. For details, see `RiskDetails` in the data structure
Note: This field may return `null`, indicating that no valid value can be found.
     * @param string $Extra This field returns the extra information configured according to your needs. If it's not configured, the returned value is empty by default. <br>Note: the returned information varies based on different customers or Biztypes. If you need to configure this field, please submit a ticket or contact after-sales manager
Note: This field may return `null`, indicating that no valid value can be found.
     * @param string $DataId This field returns the `DataId` in the request parameter corresponding to the moderated object
Note: This field may return `null`, indicating that no valid value can be found.
     * @param string $SubLabel The field returns the second-level labels under the current label.
Note: This field may return `null`, indicating that no valid value can be found.
     * @param string $ContextText Returns the context text.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SentimentAnalysis $SentimentAnalysis 
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("DetailResults",$param) and $param["DetailResults"] !== null) {
            $this->DetailResults = [];
            foreach ($param["DetailResults"] as $key => $value){
                $obj = new DetailResults();
                $obj->deserialize($value);
                array_push($this->DetailResults, $obj);
            }
        }

        if (array_key_exists("RiskDetails",$param) and $param["RiskDetails"] !== null) {
            $this->RiskDetails = [];
            foreach ($param["RiskDetails"] as $key => $value){
                $obj = new RiskDetails();
                $obj->deserialize($value);
                array_push($this->RiskDetails, $obj);
            }
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("ContextText",$param) and $param["ContextText"] !== null) {
            $this->ContextText = $param["ContextText"];
        }

        if (array_key_exists("SentimentAnalysis",$param) and $param["SentimentAnalysis"] !== null) {
            $this->SentimentAnalysis = new SentimentAnalysis();
            $this->SentimentAnalysis->deserialize($param["SentimentAnalysis"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
