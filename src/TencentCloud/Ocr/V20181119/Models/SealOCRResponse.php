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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SealOCR response structure.
 *
 * @method string getSealBody() Obtain Seal content
 * @method void setSealBody(string $SealBody) Set Seal content
 * @method Rect getLocation() Obtain Seal coordinates
 * @method void setLocation(Rect $Location) Set Seal coordinates
 * @method array getOtherTexts() Obtain Other text content
 * @method void setOtherTexts(array $OtherTexts) Set Other text content
 * @method array getSealInfos() Obtain All seal information
 * @method void setSealInfos(array $SealInfos) Set All seal information
 * @method string getSealShape() Obtain Seal shape. Valid values:
0: Round
1: Oval
2: Rectangle
3: Diamond
4: Triangle
 * @method void setSealShape(string $SealShape) Set Seal shape. Valid values:
0: Round
1: Oval
2: Rectangle
3: Diamond
4: Triangle
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class SealOCRResponse extends AbstractModel
{
    /**
     * @var string Seal content
     */
    public $SealBody;

    /**
     * @var Rect Seal coordinates
     */
    public $Location;

    /**
     * @var array Other text content
     */
    public $OtherTexts;

    /**
     * @var array All seal information
     */
    public $SealInfos;

    /**
     * @var string Seal shape. Valid values:
0: Round
1: Oval
2: Rectangle
3: Diamond
4: Triangle
     */
    public $SealShape;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $SealBody Seal content
     * @param Rect $Location Seal coordinates
     * @param array $OtherTexts Other text content
     * @param array $SealInfos All seal information
     * @param string $SealShape Seal shape. Valid values:
0: Round
1: Oval
2: Rectangle
3: Diamond
4: Triangle
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("SealBody",$param) and $param["SealBody"] !== null) {
            $this->SealBody = $param["SealBody"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new Rect();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("OtherTexts",$param) and $param["OtherTexts"] !== null) {
            $this->OtherTexts = $param["OtherTexts"];
        }

        if (array_key_exists("SealInfos",$param) and $param["SealInfos"] !== null) {
            $this->SealInfos = [];
            foreach ($param["SealInfos"] as $key => $value){
                $obj = new SealInfo();
                $obj->deserialize($value);
                array_push($this->SealInfos, $obj);
            }
        }

        if (array_key_exists("SealShape",$param) and $param["SealShape"] !== null) {
            $this->SealShape = $param["SealShape"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
