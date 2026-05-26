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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Global overview data.
 *
 * @method integer getAppNum() Obtain Number of superapps.
 * @method void setAppNum(integer $AppNum) Set Number of superapps.
 * @method integer getCorpNum() Obtain Number of teams.
 * @method void setCorpNum(integer $CorpNum) Set Number of teams.
 * @method string getFlushTime() Obtain Refresh timestamp.
 * @method void setFlushTime(string $FlushTime) Set Refresh timestamp.
 * @method integer getMiniAppNum() Obtain Number of mini programs.
 * @method void setMiniAppNum(integer $MiniAppNum) Set Number of mini programs.
 * @method integer getMiniGameNum() Obtain Number of mini games.
 * @method void setMiniGameNum(integer $MiniGameNum) Set Number of mini games.
 * @method integer getMiniGameVisitNum() Obtain Number of mini game visits.
 * @method void setMiniGameVisitNum(integer $MiniGameVisitNum) Set Number of mini game visits.
 * @method integer getUpdateNum() Obtain Number of mini program updates.
 * @method void setUpdateNum(integer $UpdateNum) Set Number of mini program updates.
 * @method integer getVisitNum() Obtain Number of mini program visits.
 * @method void setVisitNum(integer $VisitNum) Set Number of mini program visits.
 */
class Overview extends AbstractModel
{
    /**
     * @var integer Number of superapps.
     */
    public $AppNum;

    /**
     * @var integer Number of teams.
     */
    public $CorpNum;

    /**
     * @var string Refresh timestamp.
     */
    public $FlushTime;

    /**
     * @var integer Number of mini programs.
     */
    public $MiniAppNum;

    /**
     * @var integer Number of mini games.
     */
    public $MiniGameNum;

    /**
     * @var integer Number of mini game visits.
     */
    public $MiniGameVisitNum;

    /**
     * @var integer Number of mini program updates.
     */
    public $UpdateNum;

    /**
     * @var integer Number of mini program visits.
     */
    public $VisitNum;

    /**
     * @param integer $AppNum Number of superapps.
     * @param integer $CorpNum Number of teams.
     * @param string $FlushTime Refresh timestamp.
     * @param integer $MiniAppNum Number of mini programs.
     * @param integer $MiniGameNum Number of mini games.
     * @param integer $MiniGameVisitNum Number of mini game visits.
     * @param integer $UpdateNum Number of mini program updates.
     * @param integer $VisitNum Number of mini program visits.
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
        if (array_key_exists("AppNum",$param) and $param["AppNum"] !== null) {
            $this->AppNum = $param["AppNum"];
        }

        if (array_key_exists("CorpNum",$param) and $param["CorpNum"] !== null) {
            $this->CorpNum = $param["CorpNum"];
        }

        if (array_key_exists("FlushTime",$param) and $param["FlushTime"] !== null) {
            $this->FlushTime = $param["FlushTime"];
        }

        if (array_key_exists("MiniAppNum",$param) and $param["MiniAppNum"] !== null) {
            $this->MiniAppNum = $param["MiniAppNum"];
        }

        if (array_key_exists("MiniGameNum",$param) and $param["MiniGameNum"] !== null) {
            $this->MiniGameNum = $param["MiniGameNum"];
        }

        if (array_key_exists("MiniGameVisitNum",$param) and $param["MiniGameVisitNum"] !== null) {
            $this->MiniGameVisitNum = $param["MiniGameVisitNum"];
        }

        if (array_key_exists("UpdateNum",$param) and $param["UpdateNum"] !== null) {
            $this->UpdateNum = $param["UpdateNum"];
        }

        if (array_key_exists("VisitNum",$param) and $param["VisitNum"] !== null) {
            $this->VisitNum = $param["VisitNum"];
        }
    }
}
