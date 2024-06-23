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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TriggerDsEvent request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method array getEventCaseList() Obtain Event Instance Information
 * @method void setEventCaseList(array $EventCaseList) Set Event Instance Information
 * @method array getEventBatchCaseList() Obtain Event Instance Information (Continuous Time)
 * @method void setEventBatchCaseList(array $EventBatchCaseList) Set Event Instance Information (Continuous Time)
 */
class TriggerDsEventRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var array Event Instance Information
     */
    public $EventCaseList;

    /**
     * @var array Event Instance Information (Continuous Time)
     */
    public $EventBatchCaseList;

    /**
     * @param string $ProjectId Project ID
     * @param array $EventCaseList Event Instance Information
     * @param array $EventBatchCaseList Event Instance Information (Continuous Time)
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("EventCaseList",$param) and $param["EventCaseList"] !== null) {
            $this->EventCaseList = [];
            foreach ($param["EventCaseList"] as $key => $value){
                $obj = new EventCaseDTO();
                $obj->deserialize($value);
                array_push($this->EventCaseList, $obj);
            }
        }

        if (array_key_exists("EventBatchCaseList",$param) and $param["EventBatchCaseList"] !== null) {
            $this->EventBatchCaseList = [];
            foreach ($param["EventBatchCaseList"] as $key => $value){
                $obj = new EventBatchCaseDTO();
                $obj->deserialize($value);
                array_push($this->EventBatchCaseList, $obj);
            }
        }
    }
}
