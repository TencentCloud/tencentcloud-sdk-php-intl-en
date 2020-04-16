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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScanVoice request structure.
 *
 * @method integer getBizId() Obtain Application ID, which is the `AppID` obtained when you create an application in [Console > Service Management](https://console.cloud.tencent.com/gamegme)
 * @method void setBizId(integer $BizId) Set Application ID, which is the `AppID` obtained when you create an application in [Console > Service Management](https://console.cloud.tencent.com/gamegme)
 * @method array getScenes() Obtain Speech detection scenario. The value of this parameter is currently required to be `default`. Preset scenarios: abusive, pornographic, politically sensitive, advertising, terrorism, and prohibited scenarios. For specific values, please see the <a href="#Label_Value">Label description</a> above.
 * @method void setScenes(array $Scenes) Set Speech detection scenario. The value of this parameter is currently required to be `default`. Preset scenarios: abusive, pornographic, politically sensitive, advertising, terrorism, and prohibited scenarios. For specific values, please see the <a href="#Label_Value">Label description</a> above.
 * @method boolean getLive() Obtain Whether it is a live stream. false: audio file detection, true: audio stream detection.
 * @method void setLive(boolean $Live) Set Whether it is a live stream. false: audio file detection, true: audio stream detection.
 * @method array getTasks() Obtain Speech detection task list. Up to 100 tasks can be added in the list. The structure contains:
<li>DataId: unique data ID</li>
<li>Url: URL-encoded data file URL, which is a pull address if the detected speech is a stream</li>
 * @method void setTasks(array $Tasks) Set Speech detection task list. Up to 100 tasks can be added in the list. The structure contains:
<li>DataId: unique data ID</li>
<li>Url: URL-encoded data file URL, which is a pull address if the detected speech is a stream</li>
 * @method string getCallback() Obtain Async callback address for detection result. For more information, please see the <a href="#Callback_Declare">callback description</a> above. (Note: if this field is empty, the detection result can only be obtained by calling the `DescribeScanResultList` API.)
 * @method void setCallback(string $Callback) Set Async callback address for detection result. For more information, please see the <a href="#Callback_Declare">callback description</a> above. (Note: if this field is empty, the detection result can only be obtained by calling the `DescribeScanResultList` API.)
 */
class ScanVoiceRequest extends AbstractModel
{
    /**
     * @var integer Application ID, which is the `AppID` obtained when you create an application in [Console > Service Management](https://console.cloud.tencent.com/gamegme)
     */
    public $BizId;

    /**
     * @var array Speech detection scenario. The value of this parameter is currently required to be `default`. Preset scenarios: abusive, pornographic, politically sensitive, advertising, terrorism, and prohibited scenarios. For specific values, please see the <a href="#Label_Value">Label description</a> above.
     */
    public $Scenes;

    /**
     * @var boolean Whether it is a live stream. false: audio file detection, true: audio stream detection.
     */
    public $Live;

    /**
     * @var array Speech detection task list. Up to 100 tasks can be added in the list. The structure contains:
<li>DataId: unique data ID</li>
<li>Url: URL-encoded data file URL, which is a pull address if the detected speech is a stream</li>
     */
    public $Tasks;

    /**
     * @var string Async callback address for detection result. For more information, please see the <a href="#Callback_Declare">callback description</a> above. (Note: if this field is empty, the detection result can only be obtained by calling the `DescribeScanResultList` API.)
     */
    public $Callback;

    /**
     * @param integer $BizId Application ID, which is the `AppID` obtained when you create an application in [Console > Service Management](https://console.cloud.tencent.com/gamegme)
     * @param array $Scenes Speech detection scenario. The value of this parameter is currently required to be `default`. Preset scenarios: abusive, pornographic, politically sensitive, advertising, terrorism, and prohibited scenarios. For specific values, please see the <a href="#Label_Value">Label description</a> above.
     * @param boolean $Live Whether it is a live stream. false: audio file detection, true: audio stream detection.
     * @param array $Tasks Speech detection task list. Up to 100 tasks can be added in the list. The structure contains:
<li>DataId: unique data ID</li>
<li>Url: URL-encoded data file URL, which is a pull address if the detected speech is a stream</li>
     * @param string $Callback Async callback address for detection result. For more information, please see the <a href="#Callback_Declare">callback description</a> above. (Note: if this field is empty, the detection result can only be obtained by calling the `DescribeScanResultList` API.)
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("Scenes",$param) and $param["Scenes"] !== null) {
            $this->Scenes = $param["Scenes"];
        }

        if (array_key_exists("Live",$param) and $param["Live"] !== null) {
            $this->Live = $param["Live"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new Task();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = $param["Callback"];
        }
    }
}
