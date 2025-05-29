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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Label extraction configuration.
 *
 * @method AppModel getModel() Obtain Model configuration.
 * @method void setModel(AppModel $Model) Set Model configuration.
 * @method array getLabels() Obtain Label list.
 * @method void setLabels(array $Labels) Set Label list.
 * @method string getGreeting() Obtain Welcome words, within 200 characters.
 * @method void setGreeting(string $Greeting) Set Welcome words, within 200 characters.
 */
class ClassifyConfig extends AbstractModel
{
    /**
     * @var AppModel Model configuration.
     */
    public $Model;

    /**
     * @var array Label list.
     */
    public $Labels;

    /**
     * @var string Welcome words, within 200 characters.
     */
    public $Greeting;

    /**
     * @param AppModel $Model Model configuration.
     * @param array $Labels Label list.
     * @param string $Greeting Welcome words, within 200 characters.
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new AppModel();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new ClassifyLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Greeting",$param) and $param["Greeting"] !== null) {
            $this->Greeting = $param["Greeting"];
        }
    }
}
