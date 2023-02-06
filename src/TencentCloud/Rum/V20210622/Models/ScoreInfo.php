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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Project score entity
 *
 * @method string getStaticDuration() Obtain duration
 * @method void setStaticDuration(string $StaticDuration) Set duration
 * @method string getPagePv() Obtain pv
 * @method void setPagePv(string $PagePv) Set pv
 * @method string getApiFail() Obtain Failure
 * @method void setApiFail(string $ApiFail) Set Failure
 * @method string getApiNum() Obtain Request
 * @method void setApiNum(string $ApiNum) Set Request
 * @method string getStaticFail() Obtain fail
 * @method void setStaticFail(string $StaticFail) Set fail
 * @method integer getProjectID() Obtain Project ID
 * @method void setProjectID(integer $ProjectID) Set Project ID
 * @method string getPageUv() Obtain uv
 * @method void setPageUv(string $PageUv) Set uv
 * @method string getApiDuration() Obtain Number of requests
 * @method void setApiDuration(string $ApiDuration) Set Number of requests
 * @method string getScore() Obtain Score
 * @method void setScore(string $Score) Set Score
 * @method string getPageError() Obtain error
 * @method void setPageError(string $PageError) Set error
 * @method string getStaticNum() Obtain num
 * @method void setStaticNum(string $StaticNum) Set num
 * @method integer getRecordNum() Obtain num
 * @method void setRecordNum(integer $RecordNum) Set num
 * @method string getPageDuration() Obtain Duration
 * @method void setPageDuration(string $PageDuration) Set Duration
 * @method string getCreateTime() Obtain Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ScoreInfo extends AbstractModel
{
    /**
     * @var string duration
     */
    public $StaticDuration;

    /**
     * @var string pv
     */
    public $PagePv;

    /**
     * @var string Failure
     */
    public $ApiFail;

    /**
     * @var string Request
     */
    public $ApiNum;

    /**
     * @var string fail
     */
    public $StaticFail;

    /**
     * @var integer Project ID
     */
    public $ProjectID;

    /**
     * @var string uv
     */
    public $PageUv;

    /**
     * @var string Number of requests
     */
    public $ApiDuration;

    /**
     * @var string Score
     */
    public $Score;

    /**
     * @var string error
     */
    public $PageError;

    /**
     * @var string num
     */
    public $StaticNum;

    /**
     * @var integer num
     */
    public $RecordNum;

    /**
     * @var string Duration
     */
    public $PageDuration;

    /**
     * @var string Time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @param string $StaticDuration duration
     * @param string $PagePv pv
     * @param string $ApiFail Failure
     * @param string $ApiNum Request
     * @param string $StaticFail fail
     * @param integer $ProjectID Project ID
     * @param string $PageUv uv
     * @param string $ApiDuration Number of requests
     * @param string $Score Score
     * @param string $PageError error
     * @param string $StaticNum num
     * @param integer $RecordNum num
     * @param string $PageDuration Duration
     * @param string $CreateTime Time
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("StaticDuration",$param) and $param["StaticDuration"] !== null) {
            $this->StaticDuration = $param["StaticDuration"];
        }

        if (array_key_exists("PagePv",$param) and $param["PagePv"] !== null) {
            $this->PagePv = $param["PagePv"];
        }

        if (array_key_exists("ApiFail",$param) and $param["ApiFail"] !== null) {
            $this->ApiFail = $param["ApiFail"];
        }

        if (array_key_exists("ApiNum",$param) and $param["ApiNum"] !== null) {
            $this->ApiNum = $param["ApiNum"];
        }

        if (array_key_exists("StaticFail",$param) and $param["StaticFail"] !== null) {
            $this->StaticFail = $param["StaticFail"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("PageUv",$param) and $param["PageUv"] !== null) {
            $this->PageUv = $param["PageUv"];
        }

        if (array_key_exists("ApiDuration",$param) and $param["ApiDuration"] !== null) {
            $this->ApiDuration = $param["ApiDuration"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("PageError",$param) and $param["PageError"] !== null) {
            $this->PageError = $param["PageError"];
        }

        if (array_key_exists("StaticNum",$param) and $param["StaticNum"] !== null) {
            $this->StaticNum = $param["StaticNum"];
        }

        if (array_key_exists("RecordNum",$param) and $param["RecordNum"] !== null) {
            $this->RecordNum = $param["RecordNum"];
        }

        if (array_key_exists("PageDuration",$param) and $param["PageDuration"] !== null) {
            $this->PageDuration = $param["PageDuration"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
