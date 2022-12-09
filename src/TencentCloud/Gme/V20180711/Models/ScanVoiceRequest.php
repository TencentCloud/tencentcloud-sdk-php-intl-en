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
 * @method integer getBizId() Obtain Application ID, which is obtained when you create an application in the [GME console - Service Management](https://console.cloud.tencent.com/gamegme).
 * @method void setBizId(integer $BizId) Set Application ID, which is obtained when you create an application in the [GME console - Service Management](https://console.cloud.tencent.com/gamegme).
 * @method array getScenes() Obtain Voice detection scenario. It must be `default`. See the <a href="#Label_Value">Label description</a> as the result.
 * @method void setScenes(array $Scenes) Set Voice detection scenario. It must be `default`. See the <a href="#Label_Value">Label description</a> as the result.
 * @method boolean getLive() Obtain Whether it is a live stream. Values: `false` (voice file), `true` (live stream).
 * @method void setLive(boolean $Live) Set Whether it is a live stream. Values: `false` (voice file), `true` (live stream).
 * @method array getTasks() Obtain Voice detection task list. Up to 100 tasks can be added in the list. 
<li>`DataId`: Unique data ID</li>
<li>`Url`: URL-encoded data file URL, which is a pull address if the detected voice is a stream</li>
 * @method void setTasks(array $Tasks) Set Voice detection task list. Up to 100 tasks can be added in the list. 
<li>`DataId`: Unique data ID</li>
<li>`Url`: URL-encoded data file URL, which is a pull address if the detected voice is a stream</li>
 * @method string getCallback() Obtain Async callback address for detection result. For more information, please see the <a href="#Callback_Declare">Callback description</a> above. (Note: If this field is empty, the detection result can only be queried by calling the `DescribeScanResultList` API.)
 * @method void setCallback(string $Callback) Set Async callback address for detection result. For more information, please see the <a href="#Callback_Declare">Callback description</a> above. (Note: If this field is empty, the detection result can only be queried by calling the `DescribeScanResultList` API.)
 * @method string getLang() Obtain Language. Chinese will be used if it is left empty.
 * @method void setLang(string $Lang) Set Language. Chinese will be used if it is left empty.
 */
class ScanVoiceRequest extends AbstractModel
{
    /**
     * @var integer Application ID, which is obtained when you create an application in the [GME console - Service Management](https://console.cloud.tencent.com/gamegme).
     */
    public $BizId;

    /**
     * @var array Voice detection scenario. It must be `default`. See the <a href="#Label_Value">Label description</a> as the result.
     */
    public $Scenes;

    /**
     * @var boolean Whether it is a live stream. Values: `false` (voice file), `true` (live stream).
     */
    public $Live;

    /**
     * @var array Voice detection task list. Up to 100 tasks can be added in the list. 
<li>`DataId`: Unique data ID</li>
<li>`Url`: URL-encoded data file URL, which is a pull address if the detected voice is a stream</li>
     */
    public $Tasks;

    /**
     * @var string Async callback address for detection result. For more information, please see the <a href="#Callback_Declare">Callback description</a> above. (Note: If this field is empty, the detection result can only be queried by calling the `DescribeScanResultList` API.)
     */
    public $Callback;

    /**
     * @var string Language. Chinese will be used if it is left empty.
     */
    public $Lang;

    /**
     * @param integer $BizId Application ID, which is obtained when you create an application in the [GME console - Service Management](https://console.cloud.tencent.com/gamegme).
     * @param array $Scenes Voice detection scenario. It must be `default`. See the <a href="#Label_Value">Label description</a> as the result.
     * @param boolean $Live Whether it is a live stream. Values: `false` (voice file), `true` (live stream).
     * @param array $Tasks Voice detection task list. Up to 100 tasks can be added in the list. 
<li>`DataId`: Unique data ID</li>
<li>`Url`: URL-encoded data file URL, which is a pull address if the detected voice is a stream</li>
     * @param string $Callback Async callback address for detection result. For more information, please see the <a href="#Callback_Declare">Callback description</a> above. (Note: If this field is empty, the detection result can only be queried by calling the `DescribeScanResultList` API.)
     * @param string $Lang Language. Chinese will be used if it is left empty.
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

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }
    }
}
