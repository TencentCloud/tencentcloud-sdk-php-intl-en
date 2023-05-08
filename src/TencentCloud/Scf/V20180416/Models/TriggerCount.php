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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * `TriggerCount` describes the numbers of triggers in different types
 *
 * @method integer getCos() Obtain Number of COS triggers
 * @method void setCos(integer $Cos) Set Number of COS triggers
 * @method integer getTimer() Obtain Number of timer triggers
 * @method void setTimer(integer $Timer) Set Number of timer triggers
 * @method integer getCmq() Obtain Number of CMQ triggers
 * @method void setCmq(integer $Cmq) Set Number of CMQ triggers
 * @method integer getTotal() Obtain Total number of triggers
 * @method void setTotal(integer $Total) Set Total number of triggers
 * @method integer getCkafka() Obtain Number of CKafka triggers
 * @method void setCkafka(integer $Ckafka) Set Number of CKafka triggers
 * @method integer getApigw() Obtain Number of API Gateway triggers
 * @method void setApigw(integer $Apigw) Set Number of API Gateway triggers
 * @method integer getCls() Obtain Number of CLS triggers
 * @method void setCls(integer $Cls) Set Number of CLS triggers
 * @method integer getClb() Obtain Number of CLB triggers
 * @method void setClb(integer $Clb) Set Number of CLB triggers
 * @method integer getMps() Obtain Number of MPS triggers
 * @method void setMps(integer $Mps) Set Number of MPS triggers
 * @method integer getCm() Obtain Number of CM triggers
 * @method void setCm(integer $Cm) Set Number of CM triggers
 * @method integer getVod() Obtain Number of VOD triggers
 * @method void setVod(integer $Vod) Set Number of VOD triggers
 * @method integer getEb() Obtain Number of EventBridge triggers
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEb(integer $Eb) Set Number of EventBridge triggers
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class TriggerCount extends AbstractModel
{
    /**
     * @var integer Number of COS triggers
     */
    public $Cos;

    /**
     * @var integer Number of timer triggers
     */
    public $Timer;

    /**
     * @var integer Number of CMQ triggers
     */
    public $Cmq;

    /**
     * @var integer Total number of triggers
     */
    public $Total;

    /**
     * @var integer Number of CKafka triggers
     */
    public $Ckafka;

    /**
     * @var integer Number of API Gateway triggers
     */
    public $Apigw;

    /**
     * @var integer Number of CLS triggers
     */
    public $Cls;

    /**
     * @var integer Number of CLB triggers
     */
    public $Clb;

    /**
     * @var integer Number of MPS triggers
     */
    public $Mps;

    /**
     * @var integer Number of CM triggers
     */
    public $Cm;

    /**
     * @var integer Number of VOD triggers
     */
    public $Vod;

    /**
     * @var integer Number of EventBridge triggers
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Eb;

    /**
     * @param integer $Cos Number of COS triggers
     * @param integer $Timer Number of timer triggers
     * @param integer $Cmq Number of CMQ triggers
     * @param integer $Total Total number of triggers
     * @param integer $Ckafka Number of CKafka triggers
     * @param integer $Apigw Number of API Gateway triggers
     * @param integer $Cls Number of CLS triggers
     * @param integer $Clb Number of CLB triggers
     * @param integer $Mps Number of MPS triggers
     * @param integer $Cm Number of CM triggers
     * @param integer $Vod Number of VOD triggers
     * @param integer $Eb Number of EventBridge triggers
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Cos",$param) and $param["Cos"] !== null) {
            $this->Cos = $param["Cos"];
        }

        if (array_key_exists("Timer",$param) and $param["Timer"] !== null) {
            $this->Timer = $param["Timer"];
        }

        if (array_key_exists("Cmq",$param) and $param["Cmq"] !== null) {
            $this->Cmq = $param["Cmq"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Ckafka",$param) and $param["Ckafka"] !== null) {
            $this->Ckafka = $param["Ckafka"];
        }

        if (array_key_exists("Apigw",$param) and $param["Apigw"] !== null) {
            $this->Apigw = $param["Apigw"];
        }

        if (array_key_exists("Cls",$param) and $param["Cls"] !== null) {
            $this->Cls = $param["Cls"];
        }

        if (array_key_exists("Clb",$param) and $param["Clb"] !== null) {
            $this->Clb = $param["Clb"];
        }

        if (array_key_exists("Mps",$param) and $param["Mps"] !== null) {
            $this->Mps = $param["Mps"];
        }

        if (array_key_exists("Cm",$param) and $param["Cm"] !== null) {
            $this->Cm = $param["Cm"];
        }

        if (array_key_exists("Vod",$param) and $param["Vod"] !== null) {
            $this->Vod = $param["Vod"];
        }

        if (array_key_exists("Eb",$param) and $param["Eb"] !== null) {
            $this->Eb = $param["Eb"];
        }
    }
}
