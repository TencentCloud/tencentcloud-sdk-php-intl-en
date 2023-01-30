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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLS logset information
 *
 * @method string getLogsetID() Obtain Logset ID
 * @method void setLogsetID(string $LogsetID) Set Logset ID
 * @method string getLogsetName() Obtain Logset name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogsetName(string $LogsetName) Set Logset name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTopicList() Obtain List of CLS topics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicList(array $TopicList) Set List of CLS topics
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ClsLogsetInfo extends AbstractModel
{
    /**
     * @var string Logset ID
     */
    public $LogsetID;

    /**
     * @var string Logset name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogsetName;

    /**
     * @var array List of CLS topics
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicList;

    /**
     * @param string $LogsetID Logset ID
     * @param string $LogsetName Logset name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TopicList List of CLS topics
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
        if (array_key_exists("LogsetID",$param) and $param["LogsetID"] !== null) {
            $this->LogsetID = $param["LogsetID"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("TopicList",$param) and $param["TopicList"] !== null) {
            $this->TopicList = [];
            foreach ($param["TopicList"] as $key => $value){
                $obj = new ClsTopicInfo();
                $obj->deserialize($value);
                array_push($this->TopicList, $obj);
            }
        }
    }
}
