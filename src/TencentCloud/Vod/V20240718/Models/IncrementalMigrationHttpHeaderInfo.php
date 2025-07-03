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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Incremental migration back-to-origin HTTP Header information.
 *
 * @method string getHeaderFollowMode() Obtain HTTP Header Passthrough Mode. Values valid:
<li>FOLLOW_ALL: Pass through all header information;<\li>
<li>FOLLOW_PART: Pass through partial header information;<\li>
<li>IGNORE_PART: Ignore partial header information.<\li>
 * @method void setHeaderFollowMode(string $HeaderFollowMode) Set HTTP Header Passthrough Mode. Values valid:
<li>FOLLOW_ALL: Pass through all header information;<\li>
<li>FOLLOW_PART: Pass through partial header information;<\li>
<li>IGNORE_PART: Ignore partial header information.<\li>
 * @method array getFollowHttpHeaderKeySet() Obtain Header Key Set for Passthrough. This field is required only when the HeaderFollowMode is set to `FOLLOW_PART`.
 * @method void setFollowHttpHeaderKeySet(array $FollowHttpHeaderKeySet) Set Header Key Set for Passthrough. This field is required only when the HeaderFollowMode is set to `FOLLOW_PART`.
 * @method array getNewHttpHeaderSet() Obtain Add Header Key-Value Pair Collection.
 * @method void setNewHttpHeaderSet(array $NewHttpHeaderSet) Set Add Header Key-Value Pair Collection.
 */
class IncrementalMigrationHttpHeaderInfo extends AbstractModel
{
    /**
     * @var string HTTP Header Passthrough Mode. Values valid:
<li>FOLLOW_ALL: Pass through all header information;<\li>
<li>FOLLOW_PART: Pass through partial header information;<\li>
<li>IGNORE_PART: Ignore partial header information.<\li>
     */
    public $HeaderFollowMode;

    /**
     * @var array Header Key Set for Passthrough. This field is required only when the HeaderFollowMode is set to `FOLLOW_PART`.
     */
    public $FollowHttpHeaderKeySet;

    /**
     * @var array Add Header Key-Value Pair Collection.
     */
    public $NewHttpHeaderSet;

    /**
     * @param string $HeaderFollowMode HTTP Header Passthrough Mode. Values valid:
<li>FOLLOW_ALL: Pass through all header information;<\li>
<li>FOLLOW_PART: Pass through partial header information;<\li>
<li>IGNORE_PART: Ignore partial header information.<\li>
     * @param array $FollowHttpHeaderKeySet Header Key Set for Passthrough. This field is required only when the HeaderFollowMode is set to `FOLLOW_PART`.
     * @param array $NewHttpHeaderSet Add Header Key-Value Pair Collection.
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
        if (array_key_exists("HeaderFollowMode",$param) and $param["HeaderFollowMode"] !== null) {
            $this->HeaderFollowMode = $param["HeaderFollowMode"];
        }

        if (array_key_exists("FollowHttpHeaderKeySet",$param) and $param["FollowHttpHeaderKeySet"] !== null) {
            $this->FollowHttpHeaderKeySet = $param["FollowHttpHeaderKeySet"];
        }

        if (array_key_exists("NewHttpHeaderSet",$param) and $param["NewHttpHeaderSet"] !== null) {
            $this->NewHttpHeaderSet = [];
            foreach ($param["NewHttpHeaderSet"] as $key => $value){
                $obj = new IncrementalMigrationHttpHeader();
                $obj->deserialize($value);
                array_push($this->NewHttpHeaderSet, $obj);
            }
        }
    }
}
