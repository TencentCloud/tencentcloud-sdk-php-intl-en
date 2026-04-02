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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Project score entity.
 *
 * @method integer getProjectID() Obtain Project ID.
 * @method void setProjectID(integer $ProjectID) Set Project ID.
 * @method float getScore() Obtain Total project score.
 * @method void setScore(float $Score) Set Total project score.
 * @method float getApiPerformanceScore() Obtain API performance score.
 * @method void setApiPerformanceScore(float $ApiPerformanceScore) Set API performance score.
 * @method float getApiAvailableScore() Obtain API availability score.
 * @method void setApiAvailableScore(float $ApiAvailableScore) Set API availability score.
 * @method integer getApiNum() Obtain Total API calls.
 * @method void setApiNum(integer $ApiNum) Set Total API calls.
 * @method integer getApiFail() Obtain API failures.
 * @method void setApiFail(integer $ApiFail) Set API failures.
 * @method float getApiDuration() Obtain Average API duration.
 * @method void setApiDuration(float $ApiDuration) Set Average API duration.
 * @method float getPagePerformanceScore() Obtain Page performance score.
 * @method void setPagePerformanceScore(float $PagePerformanceScore) Set Page performance score.
 * @method integer getPagePv() Obtain Page views.
 * @method void setPagePv(integer $PagePv) Set Page views.
 * @method integer getPageUv() Obtain Unique visitors.
 * @method void setPageUv(integer $PageUv) Set Unique visitors.
 * @method integer getPageError() Obtain Page errors.
 * @method void setPageError(integer $PageError) Set Page errors.
 * @method float getPageDuration() Obtain First meaningful paint.
 * @method void setPageDuration(float $PageDuration) Set First meaningful paint.
 * @method float getPageLCP() Obtain Average largest contentful paint (LCP).
 * @method void setPageLCP(float $PageLCP) Set Average largest contentful paint (LCP).
 * @method float getPageFID() Obtain Average first input delay (FID).
 * @method void setPageFID(float $PageFID) Set Average first input delay (FID).
 * @method float getPageCLS() Obtain Average cumulative layout shift (CLS).
 * @method void setPageCLS(float $PageCLS) Set Average cumulative layout shift (CLS).
 * @method float getPageFCP() Obtain Average first contentful paint (FCP).
 * @method void setPageFCP(float $PageFCP) Set Average first contentful paint (FCP).
 * @method float getPageINP() Obtain Average interaction to next paint (INP).
 * @method void setPageINP(float $PageINP) Set Average interaction to next paint (INP).
 * @method float getJsErrorScore() Obtain JavaScript error score.
 * @method void setJsErrorScore(float $JsErrorScore) Set JavaScript error score.
 * @method float getStaticAvailableScore() Obtain Static resource availability score.
 * @method void setStaticAvailableScore(float $StaticAvailableScore) Set Static resource availability score.
 * @method float getStaticPerformanceScore() Obtain Static resource performance score.
 * @method void setStaticPerformanceScore(float $StaticPerformanceScore) Set Static resource performance score.
 * @method integer getStaticNum() Obtain Total static resource requests.
 * @method void setStaticNum(integer $StaticNum) Set Total static resource requests.
 * @method integer getStaticFail() Obtain Static resource loading failures.
 * @method void setStaticFail(integer $StaticFail) Set Static resource loading failures.
 * @method float getStaticDuration() Obtain Static resource loading time.
 * @method void setStaticDuration(float $StaticDuration) Set Static resource loading time.
 */
class ScoreInfoV2 extends AbstractModel
{
    /**
     * @var integer Project ID.
     */
    public $ProjectID;

    /**
     * @var float Total project score.
     */
    public $Score;

    /**
     * @var float API performance score.
     */
    public $ApiPerformanceScore;

    /**
     * @var float API availability score.
     */
    public $ApiAvailableScore;

    /**
     * @var integer Total API calls.
     */
    public $ApiNum;

    /**
     * @var integer API failures.
     */
    public $ApiFail;

    /**
     * @var float Average API duration.
     */
    public $ApiDuration;

    /**
     * @var float Page performance score.
     */
    public $PagePerformanceScore;

    /**
     * @var integer Page views.
     */
    public $PagePv;

    /**
     * @var integer Unique visitors.
     */
    public $PageUv;

    /**
     * @var integer Page errors.
     */
    public $PageError;

    /**
     * @var float First meaningful paint.
     */
    public $PageDuration;

    /**
     * @var float Average largest contentful paint (LCP).
     */
    public $PageLCP;

    /**
     * @var float Average first input delay (FID).
     */
    public $PageFID;

    /**
     * @var float Average cumulative layout shift (CLS).
     */
    public $PageCLS;

    /**
     * @var float Average first contentful paint (FCP).
     */
    public $PageFCP;

    /**
     * @var float Average interaction to next paint (INP).
     */
    public $PageINP;

    /**
     * @var float JavaScript error score.
     */
    public $JsErrorScore;

    /**
     * @var float Static resource availability score.
     */
    public $StaticAvailableScore;

    /**
     * @var float Static resource performance score.
     */
    public $StaticPerformanceScore;

    /**
     * @var integer Total static resource requests.
     */
    public $StaticNum;

    /**
     * @var integer Static resource loading failures.
     */
    public $StaticFail;

    /**
     * @var float Static resource loading time.
     */
    public $StaticDuration;

    /**
     * @param integer $ProjectID Project ID.
     * @param float $Score Total project score.
     * @param float $ApiPerformanceScore API performance score.
     * @param float $ApiAvailableScore API availability score.
     * @param integer $ApiNum Total API calls.
     * @param integer $ApiFail API failures.
     * @param float $ApiDuration Average API duration.
     * @param float $PagePerformanceScore Page performance score.
     * @param integer $PagePv Page views.
     * @param integer $PageUv Unique visitors.
     * @param integer $PageError Page errors.
     * @param float $PageDuration First meaningful paint.
     * @param float $PageLCP Average largest contentful paint (LCP).
     * @param float $PageFID Average first input delay (FID).
     * @param float $PageCLS Average cumulative layout shift (CLS).
     * @param float $PageFCP Average first contentful paint (FCP).
     * @param float $PageINP Average interaction to next paint (INP).
     * @param float $JsErrorScore JavaScript error score.
     * @param float $StaticAvailableScore Static resource availability score.
     * @param float $StaticPerformanceScore Static resource performance score.
     * @param integer $StaticNum Total static resource requests.
     * @param integer $StaticFail Static resource loading failures.
     * @param float $StaticDuration Static resource loading time.
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
        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("ApiPerformanceScore",$param) and $param["ApiPerformanceScore"] !== null) {
            $this->ApiPerformanceScore = $param["ApiPerformanceScore"];
        }

        if (array_key_exists("ApiAvailableScore",$param) and $param["ApiAvailableScore"] !== null) {
            $this->ApiAvailableScore = $param["ApiAvailableScore"];
        }

        if (array_key_exists("ApiNum",$param) and $param["ApiNum"] !== null) {
            $this->ApiNum = $param["ApiNum"];
        }

        if (array_key_exists("ApiFail",$param) and $param["ApiFail"] !== null) {
            $this->ApiFail = $param["ApiFail"];
        }

        if (array_key_exists("ApiDuration",$param) and $param["ApiDuration"] !== null) {
            $this->ApiDuration = $param["ApiDuration"];
        }

        if (array_key_exists("PagePerformanceScore",$param) and $param["PagePerformanceScore"] !== null) {
            $this->PagePerformanceScore = $param["PagePerformanceScore"];
        }

        if (array_key_exists("PagePv",$param) and $param["PagePv"] !== null) {
            $this->PagePv = $param["PagePv"];
        }

        if (array_key_exists("PageUv",$param) and $param["PageUv"] !== null) {
            $this->PageUv = $param["PageUv"];
        }

        if (array_key_exists("PageError",$param) and $param["PageError"] !== null) {
            $this->PageError = $param["PageError"];
        }

        if (array_key_exists("PageDuration",$param) and $param["PageDuration"] !== null) {
            $this->PageDuration = $param["PageDuration"];
        }

        if (array_key_exists("PageLCP",$param) and $param["PageLCP"] !== null) {
            $this->PageLCP = $param["PageLCP"];
        }

        if (array_key_exists("PageFID",$param) and $param["PageFID"] !== null) {
            $this->PageFID = $param["PageFID"];
        }

        if (array_key_exists("PageCLS",$param) and $param["PageCLS"] !== null) {
            $this->PageCLS = $param["PageCLS"];
        }

        if (array_key_exists("PageFCP",$param) and $param["PageFCP"] !== null) {
            $this->PageFCP = $param["PageFCP"];
        }

        if (array_key_exists("PageINP",$param) and $param["PageINP"] !== null) {
            $this->PageINP = $param["PageINP"];
        }

        if (array_key_exists("JsErrorScore",$param) and $param["JsErrorScore"] !== null) {
            $this->JsErrorScore = $param["JsErrorScore"];
        }

        if (array_key_exists("StaticAvailableScore",$param) and $param["StaticAvailableScore"] !== null) {
            $this->StaticAvailableScore = $param["StaticAvailableScore"];
        }

        if (array_key_exists("StaticPerformanceScore",$param) and $param["StaticPerformanceScore"] !== null) {
            $this->StaticPerformanceScore = $param["StaticPerformanceScore"];
        }

        if (array_key_exists("StaticNum",$param) and $param["StaticNum"] !== null) {
            $this->StaticNum = $param["StaticNum"];
        }

        if (array_key_exists("StaticFail",$param) and $param["StaticFail"] !== null) {
            $this->StaticFail = $param["StaticFail"];
        }

        if (array_key_exists("StaticDuration",$param) and $param["StaticDuration"] !== null) {
            $this->StaticDuration = $param["StaticDuration"];
        }
    }
}
