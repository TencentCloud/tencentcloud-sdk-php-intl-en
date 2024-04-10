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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Multi-topic search return information
 *
 * @method array getErrors() Obtain Error information for multi-log topic searchNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrors(array $Errors) Set Error information for multi-log topic searchNote: This field may return null, indicating that no valid values can be obtained.
 * @method array getInfos() Obtain Information for each log topic in multi-log topic searchNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setInfos(array $Infos) Set Information for each log topic in multi-log topic searchNote: This field may return null, indicating that no valid values can be obtained.
 */
class SearchLogTopics extends AbstractModel
{
    /**
     * @var array Error information for multi-log topic searchNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Errors;

    /**
     * @var array Information for each log topic in multi-log topic searchNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Infos;

    /**
     * @param array $Errors Error information for multi-log topic searchNote: This field may return null, indicating that no valid values can be obtained.
     * @param array $Infos Information for each log topic in multi-log topic searchNote: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Errors",$param) and $param["Errors"] !== null) {
            $this->Errors = [];
            foreach ($param["Errors"] as $key => $value){
                $obj = new SearchLogErrors();
                $obj->deserialize($value);
                array_push($this->Errors, $obj);
            }
        }

        if (array_key_exists("Infos",$param) and $param["Infos"] !== null) {
            $this->Infos = [];
            foreach ($param["Infos"] as $key => $value){
                $obj = new SearchLogInfos();
                $obj->deserialize($value);
                array_push($this->Infos, $obj);
            }
        }
    }
}
