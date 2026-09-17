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
 * ComposeMedia request structure.
 *
 * @method array getTracks() Obtain 
 * @method void setTracks(array $Tracks) Set 
 * @method ComposeMediaOutput getOutput() Obtain 
 * @method void setOutput(ComposeMediaOutput $Output) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method Canvas getCanvas() Obtain 
 * @method void setCanvas(Canvas $Canvas) Set 
 * @method string getSessionContext() Obtain 
 * @method void setSessionContext(string $SessionContext) Set 
 * @method string getSessionId() Obtain 
 * @method void setSessionId(string $SessionId) Set 
 */
class ComposeMediaRequest extends AbstractModel
{
    /**
     * @var array 
     */
    public $Tracks;

    /**
     * @var ComposeMediaOutput 
     */
    public $Output;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var Canvas 
     */
    public $Canvas;

    /**
     * @var string 
     */
    public $SessionContext;

    /**
     * @var string 
     */
    public $SessionId;

    /**
     * @param array $Tracks 
     * @param ComposeMediaOutput $Output 
     * @param integer $SubAppId 
     * @param Canvas $Canvas 
     * @param string $SessionContext 
     * @param string $SessionId 
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
        if (array_key_exists("Tracks",$param) and $param["Tracks"] !== null) {
            $this->Tracks = [];
            foreach ($param["Tracks"] as $key => $value){
                $obj = new MediaTrack();
                $obj->deserialize($value);
                array_push($this->Tracks, $obj);
            }
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new ComposeMediaOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Canvas",$param) and $param["Canvas"] !== null) {
            $this->Canvas = new Canvas();
            $this->Canvas->deserialize($param["Canvas"]);
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
