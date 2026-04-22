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
 * Global overview data
 *
 * @method integer getAppNum() Obtain Superapps
 * @method void setAppNum(integer $AppNum) Set Superapps
 * @method integer getCorpNum() Obtain Teams
 * @method void setCorpNum(integer $CorpNum) Set Teams
 * @method string getFlushTime() Obtain Refresh time
 * @method void setFlushTime(string $FlushTime) Set Refresh time
 * @method integer getMiniAppNum() Obtain Mini programs
 * @method void setMiniAppNum(integer $MiniAppNum) Set Mini programs
 * @method integer getMiniGameNum() Obtain Mini games
 * @method void setMiniGameNum(integer $MiniGameNum) Set Mini games
 * @method integer getMiniGameVisitNum() Obtain Mini game visits
 * @method void setMiniGameVisitNum(integer $MiniGameVisitNum) Set Mini game visits
 * @method integer getUpdateNum() Obtain Mini program updates
 * @method void setUpdateNum(integer $UpdateNum) Set Mini program updates
 * @method integer getVisitNum() Obtain Mini program visits
 * @method void setVisitNum(integer $VisitNum) Set Mini program visits
 */
class Overview extends AbstractModel
{
    /**
     * @var integer Superapps
     */
    public $AppNum;

    /**
     * @var integer Teams
     */
    public $CorpNum;

    /**
     * @var string Refresh time
     */
    public $FlushTime;

    /**
     * @var integer Mini programs
     */
    public $MiniAppNum;

    /**
     * @var integer Mini games
     */
    public $MiniGameNum;

    /**
     * @var integer Mini game visits
     */
    public $MiniGameVisitNum;

    /**
     * @var integer Mini program updates
     */
    public $UpdateNum;

    /**
     * @var integer Mini program visits
     */
    public $VisitNum;

    /**
     * @param integer $AppNum Superapps
     * @param integer $CorpNum Teams
     * @param string $FlushTime Refresh time
     * @param integer $MiniAppNum Mini programs
     * @param integer $MiniGameNum Mini games
     * @param integer $MiniGameVisitNum Mini game visits
     * @param integer $UpdateNum Mini program updates
     * @param integer $VisitNum Mini program visits
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
