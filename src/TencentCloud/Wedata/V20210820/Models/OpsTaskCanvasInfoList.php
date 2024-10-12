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
 * Canvas Required Information
 *
 * @method array getTasksList() Obtain Canvas Task Information
 * @method void setTasksList(array $TasksList) Set Canvas Task Information
 * @method array getLinksList() Obtain Canvas Task Link Information
 * @method void setLinksList(array $LinksList) Set Canvas Task Link Information
 * @method array getCirculateTaskList() Obtain Canvas Cyclic Dependency Task Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCirculateTaskList(array $CirculateTaskList) Set Canvas Cyclic Dependency Task Information
Note: This field may return null, indicating that no valid value can be obtained.
 */
class OpsTaskCanvasInfoList extends AbstractModel
{
    /**
     * @var array Canvas Task Information
     */
    public $TasksList;

    /**
     * @var array Canvas Task Link Information
     */
    public $LinksList;

    /**
     * @var array Canvas Cyclic Dependency Task Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CirculateTaskList;

    /**
     * @param array $TasksList Canvas Task Information
     * @param array $LinksList Canvas Task Link Information
     * @param array $CirculateTaskList Canvas Cyclic Dependency Task Information
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TasksList",$param) and $param["TasksList"] !== null) {
            $this->TasksList = [];
            foreach ($param["TasksList"] as $key => $value){
                $obj = new OpsTaskCanvasDto();
                $obj->deserialize($value);
                array_push($this->TasksList, $obj);
            }
        }

        if (array_key_exists("LinksList",$param) and $param["LinksList"] !== null) {
            $this->LinksList = [];
            foreach ($param["LinksList"] as $key => $value){
                $obj = new OpsTaskLinkInfoDto();
                $obj->deserialize($value);
                array_push($this->LinksList, $obj);
            }
        }

        if (array_key_exists("CirculateTaskList",$param) and $param["CirculateTaskList"] !== null) {
            $this->CirculateTaskList = [];
            foreach ($param["CirculateTaskList"] as $key => $value){
                $obj = new OpsTaskCanvasDto();
                $obj->deserialize($value);
                array_push($this->CirculateTaskList, $obj);
            }
        }
    }
}
