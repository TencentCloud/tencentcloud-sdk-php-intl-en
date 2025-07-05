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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListQA request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method integer getPageNumber() Obtain Page number.
 * @method void setPageNumber(integer $PageNumber) Set Page number.
 * @method integer getPageSize() Obtain Page size.
 * @method void setPageSize(integer $PageSize) Set Page size.
 * @method string getQuery() Obtain Query a question.
 * @method void setQuery(string $Query) Set Query a question.
 * @method array getAcceptStatus() Obtain Verification status (1: not verified 2: adopted 3: not adopted).
 * @method void setAcceptStatus(array $AcceptStatus) Set Verification status (1: not verified 2: adopted 3: not adopted).
 * @method array getReleaseStatus() Obtain Release status (2: pending release; 3: releasing; 4: released; 7: under review; 8: review failed; 9: under manual appeal; 11: manual appeal failed; 12: expired; 13: excessive invalid; 14: excessive invalid recovered).
 * @method void setReleaseStatus(array $ReleaseStatus) Set Release status (2: pending release; 3: releasing; 4: released; 7: under review; 8: review failed; 9: under manual appeal; 11: manual appeal failed; 12: expired; 13: excessive invalid; 14: excessive invalid recovered).
 * @method string getDocBizId() Obtain Document ID.
 * @method void setDocBizId(string $DocBizId) Set Document ID.
 * @method integer getSource() Obtain Source (1: generated from document; 2: import in batches; 3: manually added).
 * @method void setSource(integer $Source) Set Source (1: generated from document; 2: import in batches; 3: manually added).
 * @method string getQueryAnswer() Obtain Query an answer.
 * @method void setQueryAnswer(string $QueryAnswer) Set Query an answer.
 * @method string getCateBizId() Obtain Category ID.
 * @method void setCateBizId(string $CateBizId) Set Category ID.
 * @method array getQaBizIds() Obtain Q&A business ID list.
 * @method void setQaBizIds(array $QaBizIds) Set Q&A business ID list.
 * @method string getQueryType() Obtain Query type: filename; attribute label.
 * @method void setQueryType(string $QueryType) Set Query type: filename; attribute label.
 */
class ListQARequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var integer Page number.
     */
    public $PageNumber;

    /**
     * @var integer Page size.
     */
    public $PageSize;

    /**
     * @var string Query a question.
     */
    public $Query;

    /**
     * @var array Verification status (1: not verified 2: adopted 3: not adopted).
     */
    public $AcceptStatus;

    /**
     * @var array Release status (2: pending release; 3: releasing; 4: released; 7: under review; 8: review failed; 9: under manual appeal; 11: manual appeal failed; 12: expired; 13: excessive invalid; 14: excessive invalid recovered).
     */
    public $ReleaseStatus;

    /**
     * @var string Document ID.
     */
    public $DocBizId;

    /**
     * @var integer Source (1: generated from document; 2: import in batches; 3: manually added).
     */
    public $Source;

    /**
     * @var string Query an answer.
     */
    public $QueryAnswer;

    /**
     * @var string Category ID.
     */
    public $CateBizId;

    /**
     * @var array Q&A business ID list.
     */
    public $QaBizIds;

    /**
     * @var string Query type: filename; attribute label.
     */
    public $QueryType;

    /**
     * @param string $BotBizId Application ID.
     * @param integer $PageNumber Page number.
     * @param integer $PageSize Page size.
     * @param string $Query Query a question.
     * @param array $AcceptStatus Verification status (1: not verified 2: adopted 3: not adopted).
     * @param array $ReleaseStatus Release status (2: pending release; 3: releasing; 4: released; 7: under review; 8: review failed; 9: under manual appeal; 11: manual appeal failed; 12: expired; 13: excessive invalid; 14: excessive invalid recovered).
     * @param string $DocBizId Document ID.
     * @param integer $Source Source (1: generated from document; 2: import in batches; 3: manually added).
     * @param string $QueryAnswer Query an answer.
     * @param string $CateBizId Category ID.
     * @param array $QaBizIds Q&A business ID list.
     * @param string $QueryType Query type: filename; attribute label.
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("AcceptStatus",$param) and $param["AcceptStatus"] !== null) {
            $this->AcceptStatus = $param["AcceptStatus"];
        }

        if (array_key_exists("ReleaseStatus",$param) and $param["ReleaseStatus"] !== null) {
            $this->ReleaseStatus = $param["ReleaseStatus"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("QueryAnswer",$param) and $param["QueryAnswer"] !== null) {
            $this->QueryAnswer = $param["QueryAnswer"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("QaBizIds",$param) and $param["QaBizIds"] !== null) {
            $this->QaBizIds = $param["QaBizIds"];
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }
    }
}
