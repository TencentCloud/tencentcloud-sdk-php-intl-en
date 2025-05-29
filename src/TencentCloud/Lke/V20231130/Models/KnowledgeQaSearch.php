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
 * Retrieval configuration.
 *
 * @method string getType() Obtain Knowledge source: doc (document), qa (question & answering), taskflow (business process), search (search enhancement).
 * @method void setType(string $Type) Set Knowledge source: doc (document), qa (question & answering), taskflow (business process), search (search enhancement).
 * @method integer getReplyFlexibility() Obtain Q&A - reply flexibility, 1: directly reply if the answer has been accepted. 2: reply after the accepted answer has been polished.
 * @method void setReplyFlexibility(integer $ReplyFlexibility) Set Q&A - reply flexibility, 1: directly reply if the answer has been accepted. 2: reply after the accepted answer has been polished.
 * @method boolean getUseSearchEngine() Obtain Search enhancement - search engine status.
 * @method void setUseSearchEngine(boolean $UseSearchEngine) Set Search enhancement - search engine status.
 * @method boolean getShowSearchEngine() Obtain Whether to display the search engine retrieval status.
 * @method void setShowSearchEngine(boolean $ShowSearchEngine) Set Whether to display the search engine retrieval status.
 * @method boolean getIsEnabled() Obtain Knowledge source, whether to select.
 * @method void setIsEnabled(boolean $IsEnabled) Set Knowledge source, whether to select.
 * @method integer getQaTopN() Obtain Maximum number of Q&A recalls, defaults to 2, limited to 5.
 * @method void setQaTopN(integer $QaTopN) Set Maximum number of Q&A recalls, defaults to 2, limited to 5.
 * @method integer getDocTopN() Obtain Maximum number of documents recalls, defaults to 3, limited to 5.
 * @method void setDocTopN(integer $DocTopN) Set Maximum number of documents recalls, defaults to 3, limited to 5.
 * @method float getConfidence() Obtain Retrieval confidence degree, valid for documents and Q&A. Value range: 0.01 - 0.99.
 * @method void setConfidence(float $Confidence) Set Retrieval confidence degree, valid for documents and Q&A. Value range: 0.01 - 0.99.
 * @method integer getResourceStatus() Obtain Resource status, 1: the resource is available; 2: the resource is exhausted.
 * @method void setResourceStatus(integer $ResourceStatus) Set Resource status, 1: the resource is available; 2: the resource is exhausted.
 */
class KnowledgeQaSearch extends AbstractModel
{
    /**
     * @var string Knowledge source: doc (document), qa (question & answering), taskflow (business process), search (search enhancement).
     */
    public $Type;

    /**
     * @var integer Q&A - reply flexibility, 1: directly reply if the answer has been accepted. 2: reply after the accepted answer has been polished.
     */
    public $ReplyFlexibility;

    /**
     * @var boolean Search enhancement - search engine status.
     */
    public $UseSearchEngine;

    /**
     * @var boolean Whether to display the search engine retrieval status.
     */
    public $ShowSearchEngine;

    /**
     * @var boolean Knowledge source, whether to select.
     */
    public $IsEnabled;

    /**
     * @var integer Maximum number of Q&A recalls, defaults to 2, limited to 5.
     */
    public $QaTopN;

    /**
     * @var integer Maximum number of documents recalls, defaults to 3, limited to 5.
     */
    public $DocTopN;

    /**
     * @var float Retrieval confidence degree, valid for documents and Q&A. Value range: 0.01 - 0.99.
     */
    public $Confidence;

    /**
     * @var integer Resource status, 1: the resource is available; 2: the resource is exhausted.
     */
    public $ResourceStatus;

    /**
     * @param string $Type Knowledge source: doc (document), qa (question & answering), taskflow (business process), search (search enhancement).
     * @param integer $ReplyFlexibility Q&A - reply flexibility, 1: directly reply if the answer has been accepted. 2: reply after the accepted answer has been polished.
     * @param boolean $UseSearchEngine Search enhancement - search engine status.
     * @param boolean $ShowSearchEngine Whether to display the search engine retrieval status.
     * @param boolean $IsEnabled Knowledge source, whether to select.
     * @param integer $QaTopN Maximum number of Q&A recalls, defaults to 2, limited to 5.
     * @param integer $DocTopN Maximum number of documents recalls, defaults to 3, limited to 5.
     * @param float $Confidence Retrieval confidence degree, valid for documents and Q&A. Value range: 0.01 - 0.99.
     * @param integer $ResourceStatus Resource status, 1: the resource is available; 2: the resource is exhausted.
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

        if (array_key_exists("ReplyFlexibility",$param) and $param["ReplyFlexibility"] !== null) {
            $this->ReplyFlexibility = $param["ReplyFlexibility"];
        }

        if (array_key_exists("UseSearchEngine",$param) and $param["UseSearchEngine"] !== null) {
            $this->UseSearchEngine = $param["UseSearchEngine"];
        }

        if (array_key_exists("ShowSearchEngine",$param) and $param["ShowSearchEngine"] !== null) {
            $this->ShowSearchEngine = $param["ShowSearchEngine"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("QaTopN",$param) and $param["QaTopN"] !== null) {
            $this->QaTopN = $param["QaTopN"];
        }

        if (array_key_exists("DocTopN",$param) and $param["DocTopN"] !== null) {
            $this->DocTopN = $param["DocTopN"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }
    }
}
