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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method AiReviewTaskPornResult getPornTask() Obtain 
 * @method void setPornTask(AiReviewTaskPornResult $PornTask) Set 
 * @method AiReviewTaskTerrorismResult getTerrorismTask() Obtain 
 * @method void setTerrorismTask(AiReviewTaskTerrorismResult $TerrorismTask) Set 
 * @method AiReviewTaskPoliticalResult getPoliticalTask() Obtain 
 * @method void setPoliticalTask(AiReviewTaskPoliticalResult $PoliticalTask) Set 
 * @method AiReviewTaskPornAsrResult getPornAsrTask() Obtain 
 * @method void setPornAsrTask(AiReviewTaskPornAsrResult $PornAsrTask) Set 
 * @method AiReviewTaskPornOcrResult getPornOcrTask() Obtain 
 * @method void setPornOcrTask(AiReviewTaskPornOcrResult $PornOcrTask) Set 
 * @method AiReviewTaskPoliticalAsrResult getPoliticalAsrTask() Obtain 
 * @method void setPoliticalAsrTask(AiReviewTaskPoliticalAsrResult $PoliticalAsrTask) Set 
 * @method AiReviewTaskPoliticalOcrResult getPoliticalOcrTask() Obtain 
 * @method void setPoliticalOcrTask(AiReviewTaskPoliticalOcrResult $PoliticalOcrTask) Set 
 * @method AiReviewTaskTerrorismOcrResult getTerrorismOcrTask() Obtain 
 * @method void setTerrorismOcrTask(AiReviewTaskTerrorismOcrResult $TerrorismOcrTask) Set 
 * @method AiReviewTaskProhibitedOcrResult getProhibitedOcrTask() Obtain 
 * @method void setProhibitedOcrTask(AiReviewTaskProhibitedOcrResult $ProhibitedOcrTask) Set 
 * @method AiReviewTaskProhibitedAsrResult getProhibitedAsrTask() Obtain 
 * @method void setProhibitedAsrTask(AiReviewTaskProhibitedAsrResult $ProhibitedAsrTask) Set 
 */
class AiContentReviewResult extends AbstractModel
{
    /**
     * @var string 
     */
    public $Type;

    /**
     * @var AiReviewTaskPornResult 
     */
    public $PornTask;

    /**
     * @var AiReviewTaskTerrorismResult 
     */
    public $TerrorismTask;

    /**
     * @var AiReviewTaskPoliticalResult 
     */
    public $PoliticalTask;

    /**
     * @var AiReviewTaskPornAsrResult 
     */
    public $PornAsrTask;

    /**
     * @var AiReviewTaskPornOcrResult 
     */
    public $PornOcrTask;

    /**
     * @var AiReviewTaskPoliticalAsrResult 
     */
    public $PoliticalAsrTask;

    /**
     * @var AiReviewTaskPoliticalOcrResult 
     */
    public $PoliticalOcrTask;

    /**
     * @var AiReviewTaskTerrorismOcrResult 
     */
    public $TerrorismOcrTask;

    /**
     * @var AiReviewTaskProhibitedOcrResult 
     */
    public $ProhibitedOcrTask;

    /**
     * @var AiReviewTaskProhibitedAsrResult 
     */
    public $ProhibitedAsrTask;

    /**
     * @param string $Type 
     * @param AiReviewTaskPornResult $PornTask 
     * @param AiReviewTaskTerrorismResult $TerrorismTask 
     * @param AiReviewTaskPoliticalResult $PoliticalTask 
     * @param AiReviewTaskPornAsrResult $PornAsrTask 
     * @param AiReviewTaskPornOcrResult $PornOcrTask 
     * @param AiReviewTaskPoliticalAsrResult $PoliticalAsrTask 
     * @param AiReviewTaskPoliticalOcrResult $PoliticalOcrTask 
     * @param AiReviewTaskTerrorismOcrResult $TerrorismOcrTask 
     * @param AiReviewTaskProhibitedOcrResult $ProhibitedOcrTask 
     * @param AiReviewTaskProhibitedAsrResult $ProhibitedAsrTask 
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

        if (array_key_exists("PornTask",$param) and $param["PornTask"] !== null) {
            $this->PornTask = new AiReviewTaskPornResult();
            $this->PornTask->deserialize($param["PornTask"]);
        }

        if (array_key_exists("TerrorismTask",$param) and $param["TerrorismTask"] !== null) {
            $this->TerrorismTask = new AiReviewTaskTerrorismResult();
            $this->TerrorismTask->deserialize($param["TerrorismTask"]);
        }

        if (array_key_exists("PoliticalTask",$param) and $param["PoliticalTask"] !== null) {
            $this->PoliticalTask = new AiReviewTaskPoliticalResult();
            $this->PoliticalTask->deserialize($param["PoliticalTask"]);
        }

        if (array_key_exists("PornAsrTask",$param) and $param["PornAsrTask"] !== null) {
            $this->PornAsrTask = new AiReviewTaskPornAsrResult();
            $this->PornAsrTask->deserialize($param["PornAsrTask"]);
        }

        if (array_key_exists("PornOcrTask",$param) and $param["PornOcrTask"] !== null) {
            $this->PornOcrTask = new AiReviewTaskPornOcrResult();
            $this->PornOcrTask->deserialize($param["PornOcrTask"]);
        }

        if (array_key_exists("PoliticalAsrTask",$param) and $param["PoliticalAsrTask"] !== null) {
            $this->PoliticalAsrTask = new AiReviewTaskPoliticalAsrResult();
            $this->PoliticalAsrTask->deserialize($param["PoliticalAsrTask"]);
        }

        if (array_key_exists("PoliticalOcrTask",$param) and $param["PoliticalOcrTask"] !== null) {
            $this->PoliticalOcrTask = new AiReviewTaskPoliticalOcrResult();
            $this->PoliticalOcrTask->deserialize($param["PoliticalOcrTask"]);
        }

        if (array_key_exists("TerrorismOcrTask",$param) and $param["TerrorismOcrTask"] !== null) {
            $this->TerrorismOcrTask = new AiReviewTaskTerrorismOcrResult();
            $this->TerrorismOcrTask->deserialize($param["TerrorismOcrTask"]);
        }

        if (array_key_exists("ProhibitedOcrTask",$param) and $param["ProhibitedOcrTask"] !== null) {
            $this->ProhibitedOcrTask = new AiReviewTaskProhibitedOcrResult();
            $this->ProhibitedOcrTask->deserialize($param["ProhibitedOcrTask"]);
        }

        if (array_key_exists("ProhibitedAsrTask",$param) and $param["ProhibitedAsrTask"] !== null) {
            $this->ProhibitedAsrTask = new AiReviewTaskProhibitedAsrResult();
            $this->ProhibitedAsrTask->deserialize($param["ProhibitedAsrTask"]);
        }
    }
}
