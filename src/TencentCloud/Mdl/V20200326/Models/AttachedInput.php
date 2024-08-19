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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Channel-associated input
 *
 * @method string getId() Obtain Input ID
 * @method void setId(string $Id) Set Input ID
 * @method array getAudioSelectors() Obtain Audio selector for the input. There can be 0 to 20 audio selectors.
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setAudioSelectors(array $AudioSelectors) Set Audio selector for the input. There can be 0 to 20 audio selectors.
Note: this field may return `null`, indicating that no valid value was found.
 * @method string getPullBehavior() Obtain Pull mode. If the input type is `HLS_PULL` or `MP4_PULL`, you can set this parameter to `LOOP` or `ONCE`. `LOOP` is the default value.
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setPullBehavior(string $PullBehavior) Set Pull mode. If the input type is `HLS_PULL` or `MP4_PULL`, you can set this parameter to `LOOP` or `ONCE`. `LOOP` is the default value.
Note: this field may return `null`, indicating that no valid value was found.
 * @method FailOverSettings getFailOverSettings() Obtain Input failover configuration
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setFailOverSettings(FailOverSettings $FailOverSettings) Set Input failover configuration
Note: this field may return `null`, indicating that no valid value was found.
 * @method array getCaptionSelectors() Obtain Caption selector for the input. There can be 0 to 1 audio selectors.
 * @method void setCaptionSelectors(array $CaptionSelectors) Set Caption selector for the input. There can be 0 to 1 audio selectors.
 */
class AttachedInput extends AbstractModel
{
    /**
     * @var string Input ID
     */
    public $Id;

    /**
     * @var array Audio selector for the input. There can be 0 to 20 audio selectors.
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $AudioSelectors;

    /**
     * @var string Pull mode. If the input type is `HLS_PULL` or `MP4_PULL`, you can set this parameter to `LOOP` or `ONCE`. `LOOP` is the default value.
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $PullBehavior;

    /**
     * @var FailOverSettings Input failover configuration
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $FailOverSettings;

    /**
     * @var array Caption selector for the input. There can be 0 to 1 audio selectors.
     */
    public $CaptionSelectors;

    /**
     * @param string $Id Input ID
     * @param array $AudioSelectors Audio selector for the input. There can be 0 to 20 audio selectors.
Note: this field may return `null`, indicating that no valid value was found.
     * @param string $PullBehavior Pull mode. If the input type is `HLS_PULL` or `MP4_PULL`, you can set this parameter to `LOOP` or `ONCE`. `LOOP` is the default value.
Note: this field may return `null`, indicating that no valid value was found.
     * @param FailOverSettings $FailOverSettings Input failover configuration
Note: this field may return `null`, indicating that no valid value was found.
     * @param array $CaptionSelectors Caption selector for the input. There can be 0 to 1 audio selectors.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AudioSelectors",$param) and $param["AudioSelectors"] !== null) {
            $this->AudioSelectors = [];
            foreach ($param["AudioSelectors"] as $key => $value){
                $obj = new AudioSelectorInfo();
                $obj->deserialize($value);
                array_push($this->AudioSelectors, $obj);
            }
        }

        if (array_key_exists("PullBehavior",$param) and $param["PullBehavior"] !== null) {
            $this->PullBehavior = $param["PullBehavior"];
        }

        if (array_key_exists("FailOverSettings",$param) and $param["FailOverSettings"] !== null) {
            $this->FailOverSettings = new FailOverSettings();
            $this->FailOverSettings->deserialize($param["FailOverSettings"]);
        }

        if (array_key_exists("CaptionSelectors",$param) and $param["CaptionSelectors"] !== null) {
            $this->CaptionSelectors = [];
            foreach ($param["CaptionSelectors"] as $key => $value){
                $obj = new CaptionSelector();
                $obj->deserialize($value);
                array_push($this->CaptionSelectors, $obj);
            }
        }
    }
}
