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
 * Superapp overview data details
 *
 * @method integer getAllActiveDeviceNum() Obtain Superapp active device count
 * @method void setAllActiveDeviceNum(integer $AllActiveDeviceNum) Set Superapp active device count
 * @method integer getAllNewDeviceNum() Obtain Superapp new device count
 * @method void setAllNewDeviceNum(integer $AllNewDeviceNum) Set Superapp new device count
 * @method integer getCorpNum() Obtain Mini program team count
 * @method void setCorpNum(integer $CorpNum) Set Mini program team count
 * @method integer getGameActiveDeviceNum() Obtain Mini game active device count
 * @method void setGameActiveDeviceNum(integer $GameActiveDeviceNum) Set Mini game active device count
 * @method integer getGameNewDeviceNum() Obtain Mini game new device count
 * @method void setGameNewDeviceNum(integer $GameNewDeviceNum) Set Mini game new device count
 * @method integer getMiniAppNum() Obtain Created mini program count

 * @method void setMiniAppNum(integer $MiniAppNum) Set Created mini program count

 * @method integer getMngNum() Obtain Created mini game count

 * @method void setMngNum(integer $MngNum) Set Created mini game count

 * @method integer getNewDeviceNum() Obtain Mini program new device count
 * @method void setNewDeviceNum(integer $NewDeviceNum) Set Mini program new device count
 * @method integer getOnlineMiniAppNum() Obtain Released mini program count

 * @method void setOnlineMiniAppNum(integer $OnlineMiniAppNum) Set Released mini program count

 * @method integer getOnlineMngNum() Obtain Released mini game count

 * @method void setOnlineMngNum(integer $OnlineMngNum) Set Released mini game count

 * @method integer getVisitNum() Obtain Mini program active device count
 * @method void setVisitNum(integer $VisitNum) Set Mini program active device count
 * @method string getFlushTime() Obtain Data refresh timestamp
 * @method void setFlushTime(string $FlushTime) Set Data refresh timestamp
 */
class APPOverviewData extends AbstractModel
{
    /**
     * @var integer Superapp active device count
     */
    public $AllActiveDeviceNum;

    /**
     * @var integer Superapp new device count
     */
    public $AllNewDeviceNum;

    /**
     * @var integer Mini program team count
     */
    public $CorpNum;

    /**
     * @var integer Mini game active device count
     */
    public $GameActiveDeviceNum;

    /**
     * @var integer Mini game new device count
     */
    public $GameNewDeviceNum;

    /**
     * @var integer Created mini program count

     */
    public $MiniAppNum;

    /**
     * @var integer Created mini game count

     */
    public $MngNum;

    /**
     * @var integer Mini program new device count
     */
    public $NewDeviceNum;

    /**
     * @var integer Released mini program count

     */
    public $OnlineMiniAppNum;

    /**
     * @var integer Released mini game count

     */
    public $OnlineMngNum;

    /**
     * @var integer Mini program active device count
     */
    public $VisitNum;

    /**
     * @var string Data refresh timestamp
     */
    public $FlushTime;

    /**
     * @param integer $AllActiveDeviceNum Superapp active device count
     * @param integer $AllNewDeviceNum Superapp new device count
     * @param integer $CorpNum Mini program team count
     * @param integer $GameActiveDeviceNum Mini game active device count
     * @param integer $GameNewDeviceNum Mini game new device count
     * @param integer $MiniAppNum Created mini program count

     * @param integer $MngNum Created mini game count

     * @param integer $NewDeviceNum Mini program new device count
     * @param integer $OnlineMiniAppNum Released mini program count

     * @param integer $OnlineMngNum Released mini game count

     * @param integer $VisitNum Mini program active device count
     * @param string $FlushTime Data refresh timestamp
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
        if (array_key_exists("AllActiveDeviceNum",$param) and $param["AllActiveDeviceNum"] !== null) {
            $this->AllActiveDeviceNum = $param["AllActiveDeviceNum"];
        }

        if (array_key_exists("AllNewDeviceNum",$param) and $param["AllNewDeviceNum"] !== null) {
            $this->AllNewDeviceNum = $param["AllNewDeviceNum"];
        }

        if (array_key_exists("CorpNum",$param) and $param["CorpNum"] !== null) {
            $this->CorpNum = $param["CorpNum"];
        }

        if (array_key_exists("GameActiveDeviceNum",$param) and $param["GameActiveDeviceNum"] !== null) {
            $this->GameActiveDeviceNum = $param["GameActiveDeviceNum"];
        }

        if (array_key_exists("GameNewDeviceNum",$param) and $param["GameNewDeviceNum"] !== null) {
            $this->GameNewDeviceNum = $param["GameNewDeviceNum"];
        }

        if (array_key_exists("MiniAppNum",$param) and $param["MiniAppNum"] !== null) {
            $this->MiniAppNum = $param["MiniAppNum"];
        }

        if (array_key_exists("MngNum",$param) and $param["MngNum"] !== null) {
            $this->MngNum = $param["MngNum"];
        }

        if (array_key_exists("NewDeviceNum",$param) and $param["NewDeviceNum"] !== null) {
            $this->NewDeviceNum = $param["NewDeviceNum"];
        }

        if (array_key_exists("OnlineMiniAppNum",$param) and $param["OnlineMiniAppNum"] !== null) {
            $this->OnlineMiniAppNum = $param["OnlineMiniAppNum"];
        }

        if (array_key_exists("OnlineMngNum",$param) and $param["OnlineMngNum"] !== null) {
            $this->OnlineMngNum = $param["OnlineMngNum"];
        }

        if (array_key_exists("VisitNum",$param) and $param["VisitNum"] !== null) {
            $this->VisitNum = $param["VisitNum"];
        }

        if (array_key_exists("FlushTime",$param) and $param["FlushTime"] !== null) {
            $this->FlushTime = $param["FlushTime"];
        }
    }
}
