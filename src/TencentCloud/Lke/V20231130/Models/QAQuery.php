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
 * Q&A query parameter.
 *
 * @method integer getPageNumber() Obtain Page number.




 * @method void setPageNumber(integer $PageNumber) Set Page number.




 * @method integer getPageSize() Obtain Number of items per page.

 * @method void setPageSize(integer $PageSize) Set Number of items per page.

 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method string getQuery() Obtain Query content.

 * @method void setQuery(string $Query) Set Query content.

 * @method string getCateBizId() Obtain Category ID.

 * @method void setCateBizId(string $CateBizId) Set Category ID.

 * @method array getAcceptStatus() Obtain Verification status.

 * @method void setAcceptStatus(array $AcceptStatus) Set Verification status.

 * @method array getReleaseStatus() Obtain Release status.

 * @method void setReleaseStatus(array $ReleaseStatus) Set Release status.

 * @method string getDocBizId() Obtain Document ID.

 * @method void setDocBizId(string $DocBizId) Set Document ID.

 * @method string getQaBizId() Obtain Q&A ID.
 * @method void setQaBizId(string $QaBizId) Set Q&A ID.
 * @method integer getSource() Obtain Source.


 * @method void setSource(integer $Source) Set Source.


 * @method string getQueryAnswer() Obtain Query an answer.

 * @method void setQueryAnswer(string $QueryAnswer) Set Query an answer.

 * @method string getQueryType() Obtain Query type: filename, attribute label.
 * @method void setQueryType(string $QueryType) Set Query type: filename, attribute label.
 */
class QAQuery extends AbstractModel
{
    /**
     * @var integer Page number.




     */
    public $PageNumber;

    /**
     * @var integer Number of items per page.

     */
    public $PageSize;

    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var string Query content.

     */
    public $Query;

    /**
     * @var string Category ID.

     */
    public $CateBizId;

    /**
     * @var array Verification status.

     */
    public $AcceptStatus;

    /**
     * @var array Release status.

     */
    public $ReleaseStatus;

    /**
     * @var string Document ID.

     */
    public $DocBizId;

    /**
     * @var string Q&A ID.
     */
    public $QaBizId;

    /**
     * @var integer Source.


     */
    public $Source;

    /**
     * @var string Query an answer.

     */
    public $QueryAnswer;

    /**
     * @var string Query type: filename, attribute label.
     */
    public $QueryType;

    /**
     * @param integer $PageNumber Page number.




     * @param integer $PageSize Number of items per page.

     * @param string $BotBizId Application ID.
     * @param string $Query Query content.

     * @param string $CateBizId Category ID.

     * @param array $AcceptStatus Verification status.

     * @param array $ReleaseStatus Release status.

     * @param string $DocBizId Document ID.

     * @param string $QaBizId Q&A ID.
     * @param integer $Source Source.


     * @param string $QueryAnswer Query an answer.

     * @param string $QueryType Query type: filename, attribute label.
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
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

        if (array_key_exists("QaBizId",$param) and $param["QaBizId"] !== null) {
            $this->QaBizId = $param["QaBizId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("QueryAnswer",$param) and $param["QueryAnswer"] !== null) {
            $this->QueryAnswer = $param["QueryAnswer"];
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }
    }
}
