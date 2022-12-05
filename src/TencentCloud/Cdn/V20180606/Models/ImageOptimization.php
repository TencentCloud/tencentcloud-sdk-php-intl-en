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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image optimization configuration
 *
 * @method WebpAdapter getWebpAdapter() Obtain `WebpAdapter` configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setWebpAdapter(WebpAdapter $WebpAdapter) Set `WebpAdapter` configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method TpgAdapter getTpgAdapter() Obtain `TpgAdapter` configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTpgAdapter(TpgAdapter $TpgAdapter) Set `TpgAdapter` configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method GuetzliAdapter getGuetzliAdapter() Obtain `GuetzliAdapter` configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setGuetzliAdapter(GuetzliAdapter $GuetzliAdapter) Set `GuetzliAdapter` configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method AvifAdapter getAvifAdapter() Obtain AVIF adapter configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAvifAdapter(AvifAdapter $AvifAdapter) Set AVIF adapter configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class ImageOptimization extends AbstractModel
{
    /**
     * @var WebpAdapter `WebpAdapter` configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $WebpAdapter;

    /**
     * @var TpgAdapter `TpgAdapter` configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $TpgAdapter;

    /**
     * @var GuetzliAdapter `GuetzliAdapter` configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $GuetzliAdapter;

    /**
     * @var AvifAdapter AVIF adapter configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AvifAdapter;

    /**
     * @param WebpAdapter $WebpAdapter `WebpAdapter` configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param TpgAdapter $TpgAdapter `TpgAdapter` configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param GuetzliAdapter $GuetzliAdapter `GuetzliAdapter` configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param AvifAdapter $AvifAdapter AVIF adapter configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("WebpAdapter",$param) and $param["WebpAdapter"] !== null) {
            $this->WebpAdapter = new WebpAdapter();
            $this->WebpAdapter->deserialize($param["WebpAdapter"]);
        }

        if (array_key_exists("TpgAdapter",$param) and $param["TpgAdapter"] !== null) {
            $this->TpgAdapter = new TpgAdapter();
            $this->TpgAdapter->deserialize($param["TpgAdapter"]);
        }

        if (array_key_exists("GuetzliAdapter",$param) and $param["GuetzliAdapter"] !== null) {
            $this->GuetzliAdapter = new GuetzliAdapter();
            $this->GuetzliAdapter->deserialize($param["GuetzliAdapter"]);
        }

        if (array_key_exists("AvifAdapter",$param) and $param["AvifAdapter"] !== null) {
            $this->AvifAdapter = new AvifAdapter();
            $this->AvifAdapter->deserialize($param["AvifAdapter"]);
        }
    }
}
